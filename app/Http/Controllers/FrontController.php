<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clean;
use App\Cowork;
use App\Property;
use App\News;

use Illuminate\Support\Facades\Mail;

use MaddHatter\LaravelFullcalendar\Facades\Calendar;

class FrontController extends Controller
{
    public function Index()
    {
    	
    	return view('front.home');
    }


    public function Indexclean()
    {
        
        return view('front.cleaning');
    }


     public function contact()
    {
        
        return view('front.contactus');
    }

     public function cowork()
    {
        
        return view('front.cowork');
    }

     public function property()
    {
        
        return view('front.property');
    }

    public function news()
    {
        
        return view('front.coming-soon');
    }

public function gallery()
    {
        
        return view('front.gallery');
    }

public function clients()
    {
        
        return view('front.clients');
    }

public function testimonial()
    {
        
        return view('front.testimonial');
    }


    public function booking()
    {
         $events = [];

        $cowork = Cowork::all();

        foreach ($cowork as $co) {
    $events[] = \Calendar::event(
    $co->space, //event title
    true, //full day event?
    $co->from, //start time (you can also use Carbon instead of DateTime)
    $co->to, //end time (you can also use Carbon instead of DateTime)
    'stringEventId' //optionally, you can specify an event ID
        );
        }



        $calendar = \Calendar::addEvents($events)->setOptions(['firstDay' =>1])->setCallbacks([]);
        
        return view('admin.booking', compact('calendar'));
    }


     public function storecontact(Request $request)
    {
       $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
             'phone'=>'required|numeric',
            'message'=>'required'
            ]);
            

      Mail::send('mail.contact',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
             'phone' => $request->get('phone'),
            'user_message' => $request->get('message')
        ), function($message)
    {
        $message->from('donot-reply@mitaneon.com');
        $message->to(['foluajiboye@yahoo.com','folu@mitaneon.com','info@mitaneon.com'], 'Admin')->subject('From Contact Us');
    });

  return Redirect()->route('home.contact')->with('message', 'Thanks for contacting us! Your message has been received. We will contact you shortly');
        
    }

    public function storeclean(Request $request)
    {
       $this->validate($request,[
            'name'=>'required',
            'lname'=> 'required',
            'phone'=> 'required',
            'email'=>'required|email',
            'address'=>'required',
            'facility'=>'required',
            'service'=>'required'
            ]);
            
            Clean::create($request->all());

      Mail::send('mail.send',
        array(
            'name' => $request->get('name'),
            'lname' => $request->get('lname'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'address' => $request->get('address'),
            'facility' => $request->get('facility'),
            'service' => $request->get('service')
        ), function($message)
    {
        $message->from('donot-reply@mitaneon.com');
        $message->to(['foluajiboye@yahoo.com','folu@mitaneon.com','info@mitaneon.com'], 'Admin')->subject('Mitaneon Professional Cleaning Booking');
    });

  return Redirect()->route('home.clean')->with('message', 'Thanks for booking with us!');
        
    }


public function storeproperty(Request $request)
    {
       $this->validate($request,[
            'name'=>'required',
            'lname'=> 'required',
            'phone'=> 'required',
            'email'=>'required|email',
            'address'=>'required',
            'facility'=>'required',
            'service'=>'required'
            ]);
            
            Property::create($request->all());

      Mail::send('mail.prop',
        array(
            'name' => $request->get('name'),
            'lname' => $request->get('lname'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'address' => $request->get('address'),
            'facility' => $request->get('facility'),
            'service' => $request->get('service')
        ), function($message)
    {
        $message->from('donot-reply@mitaneon.com');
        $message->to(['foluajiboye@yahoo.com','folu@mitaneon.com','info@mitaneon.com'], 'Admin')->subject('Mitaneon Facility Management Booking');
    });

  return Redirect()->route('home.property')->with('message', 'Thanks for booking with us!');
        
    }

public function storecowork(Request $request)
    {
       $this->validate($request,[
            'to'=>'required',
            'from'=> 'required',
            'space'=>'required'
            ]);
            
        Cowork::create($request->all());

      Mail::send('mail.book',
        array(
            'to' => $request->get('to'),
            'from' => $request->get('from'),
            'space' => $request->get('space') 
        ), function($message)
    {
        $message->from('donot-reply@mitaneon.com');
        $message->to(['foluajiboye@yahoo.com','folu@mitaneon.com','info@mitaneon.com'], 'Admin')->subject('Mitaneon Cowork space Booking');
    });
      
  return Redirect()->route('home.cowork')->with('message', 'Thanks for booking with us!');
        
    }


public function storenews(Request $request)
    {
       $this->validate($request,[
            'email'=>'required' 
            ]);
            
        News::create($request->all());

      Mail::send('mail.news',
        array(
            'email' => $request->get('email')
            
        ), function($message)
    {
        $message->from('donot-reply@mitaneon.com');
        $message->to(['foluajiboye@yahoo.com','folu@mitaneon.com','info@mitaneon.com'], 'Admin')->subject('Newsletter');
    });
      
  return Redirect()->route('home.news')->with('message', 'Thanks, you will be notified');
        
    }





}
