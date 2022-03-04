<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\eventlist;
use App\livelist;
use App\studentlist1;
use App\completedlist;
use App\userlist;
use App\student;
use DB;
use Response;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;



class purpleController extends Controller
{
    //event list
    	public function list()
		{

		 $eventlist = DB::table('event')->get();

		 return view('Event.eventlist',compact('eventlist'));

		}


		public function userlist()
		{

		 $userlist = DB::table('user')->get();

		 return view('User.user',compact('userlist'));

		}




		public function livelist()
		{

		 $livelist = DB::table('event')->where('status','=','Live')->get();

		 return view('Event.liveevent',compact('livelist'));

		}

		public function completedlist()
		{

		 $completedlist = DB::table('event')->where('status','=','Completed')->get();

		 return view('Event.completed',compact('completedlist'));

		}


		public function updateMaster(Request $request)
	    {
	      $id = $request->eId;

	    $data = userlist::find($id);
	    if($data->status == 'Active')
	    {
	    	$status = 'Deactive';
	    }
	    else
	    {
	    	$status = 'Active';
	    }
	    $data->status = $status;
	    $data->save();
	    return response()->json($data);
	   // return view('User.user'); 
	    //return redirect('User/user');   
	    
	    }   


    //update match status

	    public function update(Request $request)
	    {
	      $id = $request->eId;

	    $data = eventlist::find($id);
	    if($data->status == 'Up Coming')
	    {
	    	$status = 'Live';
	    }

	   elseif($data->status == 'Live')

	   {
	    	$status = 'Completed';
	   }
	    
	     else
	    {
	    	$status = 'Up Coming';
	    }



	    $data->status = $status;
	    $data->save();
	    return response()->json($data);


	}
	   // return view('User.user'); 
	    //return redirect('User/user');   


 //Edit user city

    public function editUsercity1(Request $request)
    {
    			//echo  $request->id;       
    		$data = userlist::find($request->id);
            $data->city= $request->name;
           
            $data->save();

            return response()->json($data);
    }

 
   


//public function updateMasterUser($id,Request $request)
  //  {
        
        
        
    //    $updateUser = UserList::find($id);
        
      //  $updateUser->city = $request->get('city');
        
        //$updateUser->save();

        //return redirect('User/user')
                     // ->with('success', 'user Update Successfully');
//} 



//Add event name
    public function addEventname(Request $request)
    {
            $data = new livelist();
            $data->event_name = $request->event_name;
            $data->status = 'Live';
            $data->save();
            return response()->json($data);
    }


 //Delete City
    public function deleteCity(Request $request)
    {
        userlist::find($request->id)->delete();

        return response()->json();
    }


//store event
 public function storeEvent(Request $request)
    {
        
  $this->validate(request(), [
            'event_name' => 'required',
            'event_date' => 'required',
            'event_type' => 'required',
            'status' => 'required',
        ]);
        
        
 eventlist::create($request->all());
          return redirect('Event/eventlist')
                    ->with('success', 'Event Add Successfully');



        
    }
	
 public function list1()
		{

		 $eventlist = DB::table('event')->get();

		 return view('Event.add',compact('eventlist'));

		}
//student
		public function storepic(Request $request)

		{

$this->validate(request(), [
            'std_name' => 'required',
            'email' => 'required',
            'image' => 'required',
            
        ]);
        


$student = new student();
$student->std_name= $request->input('std_name');
$student->email= $request->input('email');


     if($file = $request->hasFile('image')) {
        $file = $request->file('image') ;
        $fileName = $file->getClientOriginalName() ;
        $destinationPath = public_path().'/images/' ;
        $file->move($destinationPath,$fileName);
        $student->image = $fileName ;
    }
    $student->save() ;
   return view('Student.student');
	}

public function studentlist()
		{

		 $student = DB::table('school')->get();

		 return view('Student.student',compact('student'));

		}


public function studentlist12()
		{

		 $studentlist = DB::table('school')->get();

		 return view('Student.studentview',compact('studentlist'));

		
}






































































































































































		public function index()
    {
    

//     $nums =[10 ,15,25];
// $winner = $nums[1]+ nums.sort()[1];
$x = 3;
$y = 6;
$a = 1  % 10;

$z =  $a ;

 


//console.log($winner);
       
 		$liveEvent  = DB::table('event')->where('status','=','Live')->count();
 		//echo $liveEvent;
 		//exit();
        
 		$CompletedEvent  = DB::table('event')->where('status','=','Completed')->count();

        $livePlayer  = DB::table('user')->where('status','=','Active')->count();
 		
        return view('Layout.index',compact('livePlayer','liveEvent' ,'CompletedEvent' , 'z') );
    }




}
