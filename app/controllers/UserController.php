
<?php
 
class UserController extends BaseController {

   public function getUserPage($userId){
      $user = User::find($userId);
      $stories = Story::where('user_id', '=', $userId)->get();
      foreach ($stories as $key => $story) {
         if($story->content)
         $stories[$key]->content = "<p>".substr(str_replace("\n", "<br />", $story->content),0,300)."...</p>";
      }
      return View::make('user')->with('user', $user)->with('stories', $stories);
   }

   public function editUserPage($userId){
   		 $user = User::find($userId);
         if(Auth::check() && Auth::user()->id == $user->id){
      	  return View::make('user-edit')->with('user', $user);
         } else {
             return Redirect::to('user/'.$user->id)->with('message', 'Only the user may edit this content');
         }
   }

   public function saveUser($userId){
   		
   		$user = User::find($userId);
   		$user->name = htmlspecialchars(Input::get('name'));
   		$user->about = htmlspecialchars(Input::get('about'));
   		$user->save();

   		return Redirect::to('user/'.$userId)->with('message', 'Details Updated');

   }

}