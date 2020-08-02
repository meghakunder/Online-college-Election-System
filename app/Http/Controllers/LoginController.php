<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\student;
use App\candidate;

class LoginController extends Controller
{
    public function loginqry(request $req)
    {
    	$n=$req->input('name');
    	$r=$req->input('regno');
        $num=0;
        $upt=3;
        $vtu=3;
        $opn=2;
    	$select=student::where('name','=',$n)
    	->where('regno','=',$r)
        ->where('voting','=',$num)
    	->get();

        $voted=student::where('name','=',$n)
        ->where('regno','=',$r)
        ->where('voting','=',$upt)
        ->get();

        $open=student::where('name','=',$n)
        ->where('regno','=',$r)
        ->where('voting','=',$opn)
        ->get();
        

    	if(count($select)>0)
    	{
            $update=student::where('name','=',$n)->where('regno','=',$r)->update(['voting'=>$vtu]);
    		echo"
    		<script>
    		alert('Logged In');
    		window.location='/vote';
    		</script>
    		";
    	}
    	elseif(count($voted)>0)
    	{
    		echo"
    		<script>
    		alert('You have already voted');
    		window.location='/home';
    		</script>
    		";
    	}
        elseif(count($open)>0)
        {
            echo"
            <script>
            alert('Voting lines are not yet opened or Voting has already completed');
            window.location='/home';
            </script>
            ";
        }
        else{
            echo"
            <script>
            alert('Invalid name or regno');
            window.location='/login';
            </script>
            ";
        }
    }
    public function addqry(request $snd)
    {
        $stu = new student();
        $stu->name=$snd->input('name');
        $stu->regno=$snd->input('regno');
        $stu->voting=2;
        if($stu->save())
        {
            echo"
            <script>
            alert('Student has been inserted');
            window.location='/admindash';
            </script>
            ";
        }
    }
}
