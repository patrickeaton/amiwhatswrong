
<?php
 
class StoryController extends BaseController {

   public function getStoryPage($storyId){
      $story = Story::find($storyId);
      $story->content = "<p>".str_replace("\n", "<br />", $story->content)."</p>";
      return View::make('story')->with('story', $story);
   }

   public function newStoryPage(){

      if(Auth::check()){
         return View::make('story-new');
      }else{
         return Redirect::to('login')->with('message', 'Please Login or Register to write a story');
      }
   }

   public function editStoryPage($storyId){
   		$story = Story::find($storyId);
         if(Auth::check() && Auth::user()->id == $story->user_id){
      	  return View::make('story-edit')->with('story', $story);
         } else {
             return Redirect::to('story/'.$story->id)->with('message', 'Only the author may edit this article');
         }
   }

   public function saveStory($storyId){
   		
   		$story = Story::find($storyId);
   		$story->title = htmlspecialchars(Input::get('title'));
   		$story->content = htmlspecialchars(Input::get('content'));
   		$story->save();

   		return Redirect::to('story/'.$storyId)->with('message', 'Story Updated');

   }

   public function insertStory(){

         if(Auth::check()){
      		$story = new Story();
      		$story->title = htmlspecialchars(Input::get('title'));
      		$story->content = htmlspecialchars(Input::get('content'));
      		$story->approved = "N";
      		$story->user_id = Auth::user()->id;
      		$story->save();

      		return Redirect::to('story/'.$story->id)->with('message', 'Story Created');
         }else{
            return Redirect::to('login')->with('message', 'Please Login or Register to write a story');
         }
   }

   public function topStoriesPage(){
      $stories = Story::all();
      foreach ($stories as $key => $story) {
         if($story->content)
         $stories[$key]->content = "<p>".substr(str_replace("\n", "<br />", $story->content),0,300)."...</p>";
      }
      return View::make('topStories')->with('stories', $stories);
   }

}
?>