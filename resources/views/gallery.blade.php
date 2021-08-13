@extends('layouts.app')

@section('content')
<div class="container">
  <h2 class="font-weight-bold text-center">
    || Tourism Places in District ||
  </h2>
  
 
    <div class="container">
      <div class="card" style="width: 70rem;">
        <img class="card-img-top" src="{{ asset('tourism/Raneghat.jpg') }}" alt="Card image cap">
        <div class="card-body">
          <h4 class="text-success text-center">Raneghat Bridge & Selfie Point</h4>
          <p class="card-text">It is one of the most visited spots in Pasighat not only for the tourists but also for
            the locals. With the construction of the Raneghat Bridge, transportation has become easier and pleasant. A
            great picnic spot and a perfect gateway from the crowd of Pasighat town and enjoy beautiful sunsets.</p>
          <ul>
            <li>Nearest PS: Pasighat Police Station around 9 KMs.</li>
            <li>Nearest Hospital: Pasighat General Hospital around 06 KMs.</li>
            <li>Nearest Administrative Office: Office of the Deputy Commissioner around 10 KMs approx.</li>
            <li>Nearest Bus Stand: Pasighat.</li>
            <li>Nearest Railway Station: Murkongselek Station.</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container mt-4">
      <div class="card" style="width: 70rem;">
        <img class="card-img-top" src="{{ asset('tourism/bodak.jpg') }}" alt="Card image cap">
        <div class="card-body">
          <h4 class="text-success text-center">Bodak</h4>
          <p class="card-text">It is an ideal place for sightseeing and angling. The road to Bodak is breathtaking and
            best for visitors espacially those who are interested in cycling and enjoyig the view of the Siang River.
          </p>
          <ul>
            <li>Nearest PS: Pasighat Police Station around 9 KMs.</li>
            <li>Nearest Hospital: Pasighat General Hospital around 06 KMs.</li>
            <li>Nearest Administrative Office: Office of the Deputy Commissioner around 10 KMs approx.</li>
            <li>Nearest Bus Stand: Pasighat.</li>
            <li>Nearest Railway Station: Murkongselek Station.</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container mt-4">
      <div class="card" style="width: 70rem;">
        <img class="card-img-top" src="{{ asset('tourism/komlighat.jpg') }}" alt="Card image cap">
        <div class="card-body">
          <h4 class="text-success text-center">komlighat</h4>
          <p class="card-text">Another great picnic spot bt the bank of the Mighty River Siang. Here one can enjoy the cool evening breeze with friends and family. After dark, one can see lights shining in houses in Mebo village nestled in the hills located on the bank of the River Siang. Bollywood film <b>"Rangoon"</b> and other  film industries from north east has shot many films in this place.
          </p>
          <ul>
            <li>Nearest PS: Pasighat Police Station around 9 KMs.</li>
            <li>Nearest Hospital: Pasighat General Hospital around 06 KMs.</li>
            <li>Nearest Administrative Office: Office of the Deputy Commissioner around 10 KMs approx.</li>
            <li>Nearest Bus Stand: Pasighat.</li>
            <li>Nearest Railway Station: Murkongselek Station.</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container mt-4">
      <div class="card" style="width: 70rem;">
        <img class="card-img-top" src="{{ asset('tourism/bridge.jpeg') }}" style="height:70vh;" alt="Card image cap">
        <div class="card-body">
          <h4 class="text-success text-center">Pongging hanging Bridge</h4>
          <p class="card-text">Located just approximately 10 KMs form Bodak village, one can trek down to Pongging village crossing the hanging bridge. The bridge is made of metal and bamboo frame and is the only way of transportation for the village.
          </p>
          <ul>
            <li>Nearest PS: Pasighat Police Station around 9 KMs.</li>
            <li>Nearest Hospital: Mebo Community Helath Centre.</li>
            <li>Nearest Administrative Office: Office of the Sub divisional Officer, Mebo.</li>
            <li>Nearest Bus Stand: Pasighat.</li>
            <li>Nearest Railway Station: Murkongselek Station.</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container mt-4">
      <div class="card" style="width: 70rem;">
        <img class="card-img-top" src="{{ asset('tourism/sirki.jpeg') }}" style="height:70vh;" alt="Card image cap">
        <div class="card-body">
          <h4 class="text-success text-center">Sirki Waterfall</h4>
          <p class="card-text">It is located at a distance of approx 10KMs from Pasighat, It is a must visit to enjoy adventurous trek and witness the marvel of nature.
          </p>
          <ul>
            <li>Nearest PS: Pasighat Police Station around 9 KMs.</li>
            <li>Nearest Hospital: Pasighat General Hospital around 06 KMs.</li>
            <li>Nearest Administrative Office: Office of the Deputy Commissioner around 10 KMs approx.</li>
            <li>Nearest Bus Stand: Pasighat.</li>
            <li>Nearest Railway Station: Murkongselek Station.</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container mt-4">
      <div class="card" style="width: 70rem;">
        <img class="card-img-top" src="{{ asset('tourism/mandir.jpg') }}" alt="Card image cap">
        <div class="card-body">
          <h4 class="text-success text-center">Dangoria Baba Mandir</h4>
          <p class="card-text">The Mandir organizes a fair which is celebrated in the last Saturday of December every year. It is celebrated with great pomp and gaiety which draws as many as 15,000 devotees from across the country every year.
          </p>
          <ul>
            <li>Nearest PS: Mebo Police Station around 9KMs.</li>
            <li>Nearest Hospital: Mebo Community Health Centre.</li>
            <li>Nearest Administrative Office: Office of the Sub divisional Officer, Mebo.</li>
            <li>Nearest Bus Stand: Pasighat.</li>
            <li>Nearest Railway Station: Murkongselek Station.</li>
          </ul>
        </div>
      </div>
    </div>






  
  <!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('This is my contact details') }}
                </div>
            </div>
        </div>
    </div>
</div> -->


  @endsection