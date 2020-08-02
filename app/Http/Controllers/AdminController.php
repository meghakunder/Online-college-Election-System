<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\admin;
use App\student;
use App\candidate;

class AdminController extends Controller
{
    public function adminlog(request $req)
    {
    	$n=$req->input('name');
    	$r=$req->input('password');
    	$select=admin::where('name','=',$n)
    	->where('password','=',$r)
    	->get();

    	if(count($select)>0)
    	{
    		echo"
    		<script>
    		alert('Logged In');
    		window.location='/admindash';
    		</script>
    		";
    	}
    	else
    	{
    		echo"
    		<script>
    		alert('Invalid Name or Password');
    		window.location='/admin';
    		</script>
    		";
    	}
    }
    public function voteqry()
    {
    	$num=3;
    	$num1=0;
    	$num2=2;
    	$check=student::where('voting','=',$num2)->get();
    	$all=count(student::where('voting','=',$num1)->get());
    	$cout=student::where('voting','=',$num)->get();
    	$res=count($cout);
    	$ttl= $all + $res;
    	
    	if(count($check)>0){
    		echo"
    		<script>
    		alert('Voting lines are not yet opened');
    		window.location='/admindash';
    		</script>
    		";
    	}
    	else{
    		$avg = $res / $ttl;
    		$avg= $avg *100;
    		$pct=sprintf('%0.2f',$avg);
    		echo"
    		<script>
    		alert(' $pct % voting turnout');
    		window.location='/admindash';
    		</script>
    		";
    	}

    }
    public function lineqry()
    {
    	$n=1;
    	$m=3;
    	$q=0;
    	$j=2;
    	$update=student::where('voting','=',$n)->update(['voting'=>$q]);

    	$update=student::where('voting','=',$m)->update(['voting'=>$q]);

    	$update=student::where('voting','=',$j)->update(['voting'=>$q]);

    		echo"
    		<script>
    		alert('Voting lines are open now');
    		window.location='/admindash';
    		</script>
    		";
    }	
    public function closeqry()
    {
    	$n=1;
    	$m=3;
    	$q=2;
    	$j=0;
    	$update=student::where('voting','=',$n)->update(['voting'=>$q]);

    	$update=student::where('voting','=',$m)->update(['voting'=>$q]);

    	$update=student::where('voting','=',$j)->update(['voting'=>$q]);

    		echo"
    		<script>
    		alert('Voting lines are closed');
    		window.location='/admindash';
    		</script>
    		";
    }
    public function openqry()
    {
    	$n=1;
    	$j=0;
    	$update=candidate::where('show','=',$j)->update(['show'=>$n]);

    		echo"
    		<script>
    		alert('Result is live now');
    		window.location='/admindash';
    		</script>
    		";
    }
    public function deleteqry()
    {
    	$n=1;
    	
    	$j=0;
    	$update=candidate::where('show','=',$n)->delete();
    	if($update == true){
    	

    		echo"
    		<script>
    		alert('All candidates are removed');
    		window.location='/admindash';
    		</script>
    		";
    	}
    	else{
    		echo"
    		<script>
    		alert('Please display the result for public first');
    		window.location='/admindash';
    		</script>
    		";
    	}
    }	
}
