<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Aboutus;
use App\Models\Brief;
use App\Models\ImageContent;
use App\Models\TifDescription;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny',Aboutus::class); 

        $brief1 = Brief::where('name','home')->first();
        $brief2 = Brief::where('name','footer')->first();
        
        $image1 = TifDescription::where('number',1)->first();
        $image2 = TifDescription::where('number',2)->first();
        $image3 = TifDescription::where('number',3)->first();

        return view('admin.dashboard.website-content',['brief1'=>$brief1,'brief2'=>$brief2,'image1'=>$image1,'image2'=>$image2,'image3'=>$image3,]);
    }


    public function brief1(Request $request)
    {
        $this->authorize('viewAny',Aboutus::class); 

      
        $request->merge(['name'=>'home']);
        $brief1 = Brief::where('name','home')->first();

        if ($brief1) {
            $brief1->arbody = $request->arbody;
            $brief1->enbody = $request->enbody;
            $brief1->save();

        }else{
            Brief::create($request->all());

        }
        return redirect()->route('settings')->with('success',__('dashboard.success add'));
    }

    
    public function brief2(Request $request)
    {
        $this->authorize('viewAny',Aboutus::class); 

        $request->validate([
            'arbody'=>'required',
            'enbody'=>'required'
        ]);
        $request->merge(['name'=>'footer']);
        $brief2 = Brief::where('name','footer')->first();

        if ($brief2) {
            $brief2->arbody = $request->arbody;
            $brief2->enbody = $request->enbody;
            $brief2->save();
        }else{
                    Brief::create($request->all());

        }

        return redirect()->route('settings')->with('success',__('dashboard.success add'));
    }

    
    public function home_content()
    {
        $this->authorize('viewAny',Aboutus::class); 
        $image1 = TifDescription::where('number',1)->first();
        $image2 = TifDescription::where('number',2)->first();
        $image3 = TifDescription::where('number',3)->first();
        return view('admin.dashboard.home_content',['image1'=>$image1,'image2'=>$image2,'image3'=>$image3,]);

    }
    public function tif_desc(Request $request)
    {
        $this->authorize('viewAny',Aboutus::class); 

       // dd($request);
        $i = TifDescription::where('number','1')->first();
        if($i){
            if ($request->hasFile('image1')) {
           
                // Filename To store
                $filenameWithExt = $request->file('image1')->getClientOriginalName ();
                $fileNameToStore = time(). '_'. $filenameWithExt;
                
                   $file = $request->file('image1');
                   $image=$file->storeAs('/images',$fileNameToStore,[
                       'disk'=>'uploads'
                   ]);
                    $data = $request->all();
                 
                   $i->image = $image;
    
    
                }
            $i->arbody= $request->arbody1;
            $i->enbody = $request->enbody1;
            $i->artitle =$request->artitle1;
            $i->entitle=$request->entitle1;

            $i->save(); 
        }else{
            if ($request->artitle1) {

            $image1 ="";
            if ($request->hasFile('image1')) {
           
                // Filename To store
                $filenameWithExt = $request->file('image1')->getClientOriginalName ();
                $fileNameToStore = time(). '_'. $filenameWithExt;
                
                   $file = $request->file('image1');
                   $image=$file->storeAs('/images',$fileNameToStore,[
                       'disk'=>'uploads'
                   ]);
                    $data = $request->all();
                 
                   $image1 = $image;
                   
    
                }
                
            TifDescription::create([
                'number'=>'1',
                'artitle'=>$request->artitle1,
                'entitle'=>$request->entitle1,

                'arbody'=>$request->arbody1,
                'enbody'=>$request->enbody1,
                'image'=>$image1,
                ]);  
            } 
        }

        
        $i = TifDescription::where('number','2')->first();
        if($i){
            if ($request->hasFile('image2')) {
           
                // Filename To store
                $filenameWithExt = $request->file('image2')->getClientOriginalName ();
                $fileNameToStore = time(). '_'. $filenameWithExt;
                
                   $file = $request->file('image2');
                   $image=$file->storeAs('/images',$fileNameToStore,[
                       'disk'=>'uploads'
                   ]);
                    $data = $request->all();
                 
                    $i->image = $image;
    
    
                }
            $i->arbody= $request->arbody2;
            $i->enbody = $request->enbody2;
            $i->artitle =$request->artitle2;
            $i->entitle =$request->entitle2;

            $i->save(); 
        }else{
            if ($request->artitle2) {

            $image1 ="";

            if ($request->hasFile('image2')) {
           
                // Filename To store
                $filenameWithExt = $request->file('image2')->getClientOriginalName ();
                $fileNameToStore = time(). '_'. $filenameWithExt;
                
                   $file = $request->file('image2');
                   $image=$file->storeAs('/images',$fileNameToStore,[
                       'disk'=>'uploads'
                   ]);
                    $data = $request->all();
                 
                   $image1 = $image;
                   
    
                }
                TifDescription::create([
                'number'=>'2',
                'artitle'=>$request->artitle2,
                'entitle'=>$request->entitle2,

                'arbody'=>$request->arbody2,
                'enbody'=>$request->enbody2,
                'image'=>$image1,

                ]);
            }
        }

        $i = TifDescription::where('number','3')->first();
        if($i){
            if ($request->hasFile('image3')) {
           
                // Filename To store
                $filenameWithExt = $request->file('image3')->getClientOriginalName ();
                $fileNameToStore = time(). '_'. $filenameWithExt;
                
                   $file = $request->file('image3');
                   $image=$file->storeAs('/images',$fileNameToStore,[
                       'disk'=>'uploads'
                   ]);
                    $data = $request->all();
                 
                    $i->image = $image;
    
    
                }
            $i->arbody= $request->arbody3;
            $i->enbody = $request->enbody3;
            $i->artitle=$request->artitle3;
            $i->entitle=$request->entitle3;

            $i->save(); 
        }else{
            if ($request->artitle3) {
                $image1 ="";

                if ($request->hasFile('image3')) {
               
                    // Filename To store
                    $filenameWithExt = $request->file('image3')->getClientOriginalName ();
                    $fileNameToStore = time(). '_'. $filenameWithExt;
                    
                       $file = $request->file('image3');
                       $image=$file->storeAs('/images',$fileNameToStore,[
                           'disk'=>'uploads'
                       ]);
                        $data = $request->all();
                     
                       $image1 = $image;
                       
        
                    }
                    TifDescription::create([
                    'number'=>'3',
                    'artitle'=>$request->artitle3,
                    'entitle'=>$request->entitle3,
    
                    'arbody'=>$request->arbody3,
                    'enbody'=>$request->enbody3,
                    'image'=>$image1,
    
                    ]);

            }
           
        }
       
       
       
        return redirect()->route('settings')->with('success',__('dashboard.success add'));

    
    }














    public function aboutus()
    {
        $this->authorize('viewAny',Aboutus::class); 

        $image1 = ImageContent::where('enname','Our vision')->first();
        $image2 = ImageContent::where('enname','Our message')->first();
        $image3 = ImageContent::where('enname','Our goal')->first();
        $aboutus = Aboutus::first();

        return view('admin.dashboard.aboutus',['aboutus'=>$aboutus,'image1'=>$image1,'image2'=>$image2,'image3'=>$image3,]);
    }


    

    public function content(Request $request)
    {
        $this->authorize('viewAny',Aboutus::class); 

        $request->validate([
            'arbody1'=>'required',
            'enbody2'=>'required',
            'arbody2'=>'required',
            'enbody2'=>'required',
            'arbody3'=>'required',
            'enbody3'=>'required'
            
        ]);
        $i = ImageContent::where('enname','Our vision')->first();
        if($i){
            $i->arbody= $request->arbody1;
            $i->enbody = $request->enbody1;
            $i->save(); 
        }else{
            ImageContent::create([
                'arname'=>'رؤيتنا',
                'enname'=>'Our vision',
                'arbody'=>$request->arbody1,
                'enbody'=>$request->enbody1,
                ]);   
        }

        
        $i = ImageContent::where('enname','Our message')->first();
        if($i){
            $i->arbody= $request->arbody2;
            $i->enbody = $request->enbody2;
            $i->save(); 
        }else{
            ImageContent::create([
                'arname'=>'رسالتنا',
                'enname'=>'Our message',
                'arbody'=>$request->arbody2,
                'enbody'=>$request->enbody2,
                ]);
        }

        
        $i= ImageContent::where('enname','Our goal')->first();
        if($i){
            $i->arbody= $request->arbody3;
            $i->enbody = $request->enbody3;
            $i->save(); 
        }else{
                    
     ImageContent::create([
            'arname'=>'هدفنا',
            'enname'=>'Our goal',
            'arbody'=>$request->arbody3,
            'enbody'=>$request->enbody3,
            ]);
        }
       
       
       
        return redirect()->route('aboutus')->with('success',__('dashboard.success add'));

    
    }

    public function aboutuscontent(Request $request)
    {
        $request->validate([
        'arbody'=>'required',
        'enbody'=>'required',
        'image'=>'image',
        ]);
        $aboutus = Aboutus::first();
        $image1="";
        if ($aboutus) {
           // dd($request);
            if ($request->hasFile('image')) {              
                // Filename To store
                $filenameWithExt = $request->file('image')->getClientOriginalName ();
                $fileNameToStore = time(). '_'. $filenameWithExt;
                
                   $file = $request->file('image');
                   $image=$file->storeAs('/images',$fileNameToStore,[
                       'disk'=>'uploads'
                   ]);
                 
                    $aboutus->image  = $image;                  
                }
                $aboutus->arbody=$request->arbody;
                $aboutus->enbody = $request->enbody;
                $aboutus->save();
        } else {
            if ($request->hasFile('image')) {
               
                // Filename To store
                $filenameWithExt = $request->file('image')->getClientOriginalName ();
                $fileNameToStore = time(). '_'. $filenameWithExt;
                
                   $file = $request->file('image');
                   $image=$file->storeAs('/images',$fileNameToStore,[
                       'disk'=>'uploads'
                   ]);
                 
                    $image1= $image;                  
                }
            Aboutus::create([
                'arbody'=>$request->arbody,
                'enbody'=>$request->enbody,
                'image'=>$image1,
            ]);
            
        }
        return redirect()->route('aboutus')->with('success',__('dashboard.success add'));

      
    }
}