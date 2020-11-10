<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\listing;

class listingsController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $listings =  listing::orderBy('dead_line','desc')->get();
    return view ('createlisting')->with('listings',$listings);
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    $listings = listing::with('user')->get();
    return view('createlisting',compact('listings'));
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $this->validate($request, [
      'title' =>'required',
      'body' => 'required',
      'status' => 'required',
      'dead_line' => 'required',


    ]);
    // Create Ticket
    $listing = new listing;
    $listing->title = $request->input('title');
    $listing->body = $request->input('body');
    $listing->status = $request->input('status');
    $listing->dead_line = $request->input('dead_line');
    $listing->assigned_to = $request->input('assigned_to');

    $listing->user_id = auth()->user()->id;

    $listing->save();
    return redirect('/dashboard')->with('success','listing Added');
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    //
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {

            return view ('editlisting');
           }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, $id)
  {
      $this -> validate ($request , [
           'name' => 'required',
           'email'=> 'email'
         ]);
          $listings = listings::find($id);
          $listings->title    = $request->input('title');
          $listings->body = $request->input('body');
          $listings->status = $request->input('status');
          $listings->dead_line   = $request->input('dead_line');
          $listings->assigned_to   = $request->input('assigned_to');

          $listings->user_id = auth()->user()->id;
          $listings->save();
          return redirect('/dashboard')->with('success', 'listings Updated');
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
     $listings = listings::find($id);
     $listings->delete();
     return redirect('/dashboard')->with('success', 'listings Removed');
  }
}
