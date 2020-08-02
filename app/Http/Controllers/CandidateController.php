<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\student;
use App\candidate;

class CandidateController extends Controller
{
    public function select($id)
    {
    	$res = student::where('id','=',$id)->get();
    	return view('select',compact('res'));
    }
    public function selectqry(request $req)
    { 
    	$cand = new candidate();
    	$cand->name=$req->input('name');
    	$cand->regno=$req->input('regno');
    	$cand->date=$req->input('date');
    	$cand->votes=0;
    	$cand->show=0;

    	if($cand->save())
    	{
    		echo"
    		<script>
    		alert('Selected');
    		window.location='/admindash';
    		</script>
    		";
    	}
    	else
    	{
    		echo"
    		<script>
    		alert('Error');
    		window.location='/admindash';
    		</script>
    		";
    	}
    }
    public function elect($id)
    {
    	$elc = candidate::where('id','=',$id)->get();
    	return view('elect',compact('elc'));
    }
    public function electqry(request $rel)
    { 
    	$N=$rel->input('name');
    	$R=$rel->input('regno');

    	$select=candidate::where('name','=',$N)
    	->where('regno','=',$R)
    	->get();
    	

    	if(count($select)>0)
    	{
    		$update=candidate::where('name','=',$N)->where('regno','=',$R)->increment('votes');
    		echo"
    		<script>
    		alert('Vote has been registered');
    		window.location='/home';
    		</script>
    		";
    	}
    	else
    	{
    		echo"
    		<script>
    		alert('Error');
    		window.location='/login';
    		</script>
    		";
    	}
    }
    public function result($date)
    {
    	$res = candidate::where('date','=',$date)->get();
    	return view('select',compact('fnl'));
    }
    public function resultqry()
    { 
    	$num=0;

    	$check=candidate::where('show','=',$num)
    	->get();
    	

    	if(count($check)>0)
    	{
    		echo"
    		<script>
    		alert('Voting still in progress.Plese wait until it finishes');
    		window.location='/home';
    		</script>
    		";
    	}
    	else
    	{
    		echo"
    		<script>
    		
    		window.location='/resulfa';
    		</script>
    		";
    	}
    }
}
