<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Models\Group;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;

class GroupsController extends Controller
{

    public function index($name = null)
    {
        //qaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa 
        $this->authorize('viewAny',Group::class); 
       $group=Group::where('name',$name)->first();
    /*    foreach (config('abilities') as $key => $label){
        foreach ($label as $key2 => $item){
            dd($key2);
        }
    } */
        $groups = Group::get();
       // dd($groups[0]->usersNumber);

        return view('admin.dashboard.groups',['groups'=>$groups,'g'=>$group]);
    }

    
    public function create()
    {
        $this->authorize('create',Group::class); 

        $users = User::where('id','<>',Auth::id())->get();
        return view('admin.dashboard.add-group',['users'=>$users]);
    }

    public function store(Request $request)
    {
      
        $this->authorize('create',Group::class); 

       //dd($request);
         $data = $request->all();
        $data['admin_id']= Auth::id();  
      //  return $data; 
      Group::create($data);
       
        
        return redirect()->route('groups')->with('success',__('dashboard.success add'));

    }


    public function edit($id)
    {
        $group = Group::findOrFail($id);
        $this->authorize('update',$group); 

        $users = User::where('id','<>',Auth::id())->get();

        return view('admin.dashboard.update-group',['users'=>$users,'group'=>$group]);
    }
    
    public function update(Request $request,$id)
    {

       // dd($request,$id);
        $group = Group::findOrFail($id);
        $this->authorize('update',$group); 

       //dd($request);
      $data = $request->all();
        $group->update($data);
      
       
        return redirect()->route('groups',$group->name)->with('success',__('dashboard.success update'));

    }

    public function destroy($id)
    {

        $group = Group::findOrFail($id);
        $this->authorize('delete',$group); 

        $group->delete();
        return redirect()->route('groups')->with('success',__('dashboard.success delete'));

    }
}