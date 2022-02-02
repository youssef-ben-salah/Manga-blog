@extends('general_structure')


@section('main') 
    <div class="col-lg-12">
        <div style="display: flex;justify-items: flex-end;">
            <div class="card col-lg-2 col-md-2 col-sm-2" style="height: 20%;margin: 25px; display: flex;justify-items: flex-start;">
                <img src="{{voyager::image(@$the_manga->cover_image)}}" class="card-img-top" alt="..." style="width:100%;">
            </div>
            <div style="margin:25px;font-family: UnifrakturMaguntia;">
                <strong style="font-size: 25px;color: white;">{{ @$the_manga->name }}</strong>
                <div style="color: whitesmoke;margin-top: 5px;">{{@$the_manga->author_name}}</div>
                <div style="color: white;margin-top: 25px;">
                    <h3 style="color: white;font-family: UnifrakturMaguntia;">Summary</h3>
                    <p style="color: white;font-style: normal;">{!!@$the_manga->summary!!}</p>
                </div>
                <div style="display:flex;justify-content: flex-end;margin-top:150px ; margin-bottom: 0px;">
                    
                    <div >
                        <a href="#"onclick="favorite()">
                            <i class="fa fa-bookmark-o" aria-hidden="true"style="margin: 15px; color: red;"></i>bookmark
                        </a>
                    </div>
                    <div>
                        <a href="#"onclick="Like()" style="margin:5px;">
                            <i class="fa fa-thumbs-o-up" aria-hidden="true" style="margin: 15px;color: red; "></i>Like
                        </a>  
                    </div>
                </div>
            </div>
        </div>
        <hr style="background-color:whitesmoke;margin-left: 10px;margin-right: 10px;">
        <div class="row" style="margin: 10px;">
            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="section-title">
                    <h4><span style="font-family: UnifrakturMaguntia;">Chapters List</span></h4>
                </div>
            </div>
            
        </div>
        <div >
            <center>
                @foreach($chapters as $chapter)
                <div style="height:15rem;">
                    <a href="{{route('chapter', ['id' => @$chapter->id])}}">
                    <div class="card" style="width: 8rem;margin: 25px; display: flex;justify-items: flex-start;">
                        <img src="{{voyager::image(@$chapter->chapter_cover)}}" class="card-img-top" alt="..." >
                    </div>
                    <span style="font-family:UnifrakturMaguntia ;">{{@$chapter->name}}</span></a>
                </div>
                <hr style="background-color:whitesmoke;margin-left:400px;margin-right:400px;">
                @endforeach
                
            </center>
        </div>
    </div>
    <hr style="background-color:whitesmoke;margin-left: 10px;margin-right: 10px;">
@endsection

@section('title')
Details
@endsection 


