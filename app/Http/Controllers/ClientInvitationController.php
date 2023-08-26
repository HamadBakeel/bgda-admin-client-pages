<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use ArPHP\I18N\Arabic;
use App\Models\Invitation;
use Illuminate\Http\Request;
use Alkoumi\LaravelHijriDate\Hijri;
use Intervention\Image\Facades\Image;

class ClientInvitationController extends Controller
{

public function overlayImage(Request $request)
{
    $data = $request->all();
    $invitation = Invitation::with('font')->where('id',$data['invitation_id'])->first();
    $arabic = new Arabic();


    $invitation_name= $data['invitation_name'];
    $invitation_date= date("m-d", strtotime($data['invitation_date']));
    $invitation_date2 = Hijri::Date('j F ، Y',$data['invitation_date']);
    $invitation_date= date("m-d", strtotime($data['invitation_date']));
    $invitation_day= Hijri::Date('l',$data['invitation_date']);
    $invitation_place=$data['invitation_place'];
    $invitation_place_details=$data['invitation_place_details'];


    $data['image_path'] = 'uploads/' .  $invitation->getMedia('thumbnail')->first()->getDiskPath();
    $data['image_font'] ='uploads/'.$invitation->font->getMedia('thumbnail')->first()->getDiskPath();
    $data['image_color'] =$invitation->font_color;
   

    $arabicText = $arabic->utf8Glyphs('يسرني ويشرفني دعوتكم');
    $arabicText1 = $arabic->utf8Glyphs('حفل زواجي');
    $arabicText2 = $arabic->utf8Glyphs('وتناول طعام الغداء');
    $arabicText3 = $arabic->utf8Glyphs(' يوم : '  . $invitation_day);
    $arabicText4 = $arabic->utf8Glyphs(' التاريخ : '  .$invitation_date);
    $arabicText42 = $arabic->utf8Glyphs(' الموافق : '  .$invitation_date2);
    $arabicText5 = $arabic->utf8Glyphs('قاعة : ' . $invitation_place);
    $arabicText6 = $arabic->utf8Glyphs($invitation_place_details);
    $arabicText7 = $arabic->utf8Glyphs('الداعي');
    $arabicText8 = $arabic->utf8Glyphs($invitation_name);

    $image_textcolor = "#FFD700";
    $image_type = 'png';
// Open the image
$image = Image::make(public_path($data['image_path']));

// Add text to the image
$image->text($arabicText ,320, 200, function($font) use($data){
    $font->file(public_path($data['image_font']));
    $font->size(27);
    $font->color($data['image_color']);
    $font->align('center');
    $font->valign('top'); // Vertical alignment
});


$image->text($arabicText1 ,320, 250, function($font) use($data){
    $font->file(public_path($data['image_font']));
    $font->size(42);
    $font->color($data['image_color']);
    $font->align('center');
    $font->valign('top'); // Vertical alignment
});

$image->text($arabicText2 ,320, 308, function($font) use($data){
    $font->file(public_path($data['image_font']));
    $font->size(27);
    $font->color($data['image_color']);
    $font->align('center');
    $font->valign('top'); // Vertical alignment
});

$image->text($arabicText3 ,320, 385, function($font) use($data){
    $font->file(public_path($data['image_font']));
    $font->size(27);
    $font->color($data['image_color']);
    $font->align('center');
    $font->valign('top'); // Vertical alignment
});

$image->text($arabicText4 ,315, 428, function($font) use($data){
    $font->file(public_path($data['image_font']));
    $font->size(27);
    $font->color($data['image_color']);
    $font->align('center');
    $font->valign('top'); // Vertical alignment
});

$image->text($arabicText42 ,304, 465, function($font) use($data){
    $font->file(public_path($data['image_font']));
    $font->size(27);
    $font->color($data['image_color']);
    $font->align('center');
    $font->valign('top'); // Vertical alignment
});


$image->text($arabicText5,320, 520, function($font) use($data){
    $font->file(public_path($data['image_font']));
    $font->size(27);
    $font->color($data['image_color']);
    $font->align('center');
    $font->valign('top'); // Vertical alignment
});

$image->text($arabicText6,320, 580, function($font) use($data){
    $font->file(public_path($data['image_font']));
    $font->size(20);
    $font->color($data['image_color']);
    $font->align('center');
    $font->valign('top'); // Vertical alignment
});

$image->text($arabicText7 ,320, 630, function($font) use($data){
    $font->file(public_path($data['image_font']));
    $font->size(27);
    $font->color($data['image_color']);
    $font->align('center');
    $font->valign('top'); // Vertical alignment
});

$image->text($arabicText8 ,320, 660, function($font) use($data){
    $font->file(public_path($data['image_font']));
    $font->size(27);
    $font->color($data['image_color']);
    $font->align('center');
    $font->valign('top'); // Vertical alignment
});
// Save or output the modified image
$imagename= time().'.'.$image_type;
$image->save(public_path('uploads/new_invitation/'.$imagename));
return response()->json(['image_path' => asset('uploads/new_invitation/' . $imagename)]);
//return $image->response($request->imagetype);

}

}
