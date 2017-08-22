<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class VideosController extends Controller
{
    public function index(){
        return \App\Video::all();
    }
    
    public function create(Request $request){
        $params = $request->all();
        if (empty($request->input('name')) || empty($request->input('brand')) || empty($request->input('published'))){
            return "Please make sure name brand and published parameters are present";
        }
        if (\App\Video::create($params)){
            return "The New Video Created. Name: ".$request->name." Brand: ".$request->brand." Published: ".$request->published;
        };
    }
    
    public function update(Request $request){
        $params = $request->all();
        if (empty($request->input('video_id'))){
            return "video_id parameter is required";
        }
        $video = \App\Video::find($request->input('video_id'));
        if ($video->update($params)){
            return "New Video Updated";
        }
    }
    
    public function delete(Request $request){
        $params = $request->all();
        if (empty($request->input('video_id'))){
            return "video_id parameter is required";
        }
        
        $video = \App\Video::find($request->input('video_id'));
        if ($video->delete()){
            return "Video number ".$request->input('video_id')." deleted";
        }
        
    }
    
    public function views(Request $request){
        $params = $request->all();
        if (empty($request->input('video_id'))){
            return "video_id parameter is required";
        }
        return "Video number ".$request->input('video_id')." has ".\App\View::where('video_id', $request->input('video_id'))->count()." views.";
    }
    
        public function viewsReport(Request $request){
        $params = $request->all();
        if (empty($request->input('video_id')) || empty($request->input('date')) ){
            return "video_id and date parameters are required";
        }
        $viewCount = \App\View::where('video_id', $request->input('video_id'))->where('viewed_on', '>=', date($request->input('date')))->count();
        $result = \App\Video::where('id', $request->input('video_id'))->first();
        return "Video number ".$request->input('video_id')." has ".$viewCount." views since ".$request->input('date').
        "</br>Name-> ".$result->name. 
        "</br>Brand-> ".$result->brand. 
        "</br>Published->".$result->published;
    }
    
}
