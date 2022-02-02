@extends('general_structure')


@section('main')
<center>    
    <div class="container" >
            <?php 
                
               /* $albums = explode(",", $the_chapter->album);
                dd($albums);
                foreach($albums as $album) {
                    echo'<img style="height:70%;width: 50%;" src="{{voyager::image(@$chapter->@$album[$i])}}" style="max-width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:5px;">';

                }
             */
            ?>
            
        <?php $images = json_decode($the_chapter->album_ar); ?>
            @if($images != null)
                @foreach($images as $image)
                    <center>
                        <div class="img_settings_container" style="display: flex;flex-direction: column;justify-content: center; padding-right:15px;" >
                        <a href="#" class="voyager-x remove-multi-image" style="position: absolute;"></a>
                        <img src="{{ Voyager::image( $image ) }}" data-file-name="{{ $image }}" style="max-width:1150px; height:auto;  display:block; padding:2px; border:1px solid #ddd; margin-bottom:5px;">
                        </div>
                    </center>
                @endforeach
            @endif
         
    </div>
</center>
    
    
@endsection



@section('title')
Chapters
@endsection 