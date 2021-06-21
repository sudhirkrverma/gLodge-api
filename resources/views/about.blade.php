@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <h2 class="text-dark text-center">|| PASIGHAT ||</h2>
    <h3 class="text-dark">About District</h3>
    <p>The East Siang District is a wild mountainous area and presents a remarkable topographical variety. The District
        has an area of 4005 sq.km. and is lying approximately between 27º 43′ and 29º20′ North latitudes and 94º 42′ and
        95º 35′ East latitudes. The Name of the district is derived from the Mighty River Siang that, originating from
        Tibet, where it is called Tsangpo, transcends down and flows through the entire length of the area until it
        descends down into the plains of Asam south of Pasighat town, where it meets Dihang and Lohit and becomes the
        Brahmaputra.

        The Pasighat town, the headquarter of the East Siang District, is situated at an altitude of 155 metres above
        main sea level and is the oldest town in Arunachal Pradesh – established in 1911 A.D. A political Officer was
        appointed in that year with a view to help the natives of the area to come down to the plains of Assam for trade
        and commerce. It would not be wrong to say, therefore, that the people of East Siang District were the first
        natives of the state to come in contact with the mainstream. Therefore this district is called as `the gateway
        to Arunachal Pradesh’. The mighty Siang river is the life-line of the East Siang District and in Pasighat, it
        calms down before entering Assam south of Pasighat. The town covers an area of 4005 sq.kms. and supports a
        population of nearly eighty thousand persons.</p>

    <h3 class="text-dark">Our People</h3>
    <p>The East Siang District is mostly populated by the Adi tribe which comprise of a large number of tribal groups
        and can be divided into various subgroups such as the Minyongs, Padams, Shimongs, Milangs, Pasis, Karkos,
        Ashings, Pangis, Tangmas and Boris. The Adis belong to the Astro-Mongolide race and are good looking, sturdy and
        vigorous. According to Griession’s linguistic classification, the language spoken in East Siang District are put
        together under the North-Assam group of the Tibeto-Burmese group. There are various theories regarding the
        original home of the Adis; however it seems probable that they came to their present habitat from the north i.e.
        Tibet. River Siang had a major role in determining the route of migration of most of the Adi clans. However, the
        exact location of their original home in Tibet or beyond that is still to be ascertained.
        The society in East Siang, like most parts of the state, is organized on the basis of clan and village and the
        social relationships are determined on the basis of kinship or locality. The family, called rutum, is the
        smallest social unit. The society is basically patrilineal and patriarchal and the sons inherit the property.
        One outstanding feature of the Adi society that sets it aside from the mainland is the absence of the caste
        system. Of course, there are some social distinctions, but all people eat together on social occasion and take
        their part in social councils. Any mention of the Adi community of the district will not be complete without
        giving a brief account of the system of local-self government called Kebang. These village councils are
        time-honored socio-political institutions deriving their authority from tradition. They function as village
        governments expressing the will and power of the members of the society. The functions of these Kebangs are
        three-fold – judicial, administrative and developmental.</p>
    <h3 class="text-dark">Art & Culture</h3>
    <p>Dances are an integral part of the lives of the people of East Siang. These dances are simple, rythmic, colourful
        and participative. Some of the famous dances are:</p>
    <li>
        <span>Ponung</span>
    </li>
    <li>

        <span>Popir</span>
    </li>
    <li>

        <span>Dishang</span>
    </li>
    <li>
        <span>Tapu</span>
    </li>
    <hr>
    <h3 class="text-dark">Accomodation(Hotel/Resort/Dharamsahala)</h3>
    <p>Affordable hotels can be found in Pasighat, nearest town of Pangin, which is just 13 kms from Daying Ering WLS.
        The stay options available here are of a guest house and circuit house and a DFO Wildlife. These are
        budget-friendly accommodation options, and thus only cater to the basic needs of the visitors.</p>
    <h3 class="text-dark">Hotels</h3>
    <p>These are available hotels in town of Pasighat. The details are given below:</p>
    <li>AANE HOTEL</li>
    <li>SERENE HOTEL</li>
    <li>PAANE HOTEL</li>
    <li>HOTEL EAST</li>
    <li>HOTEL DONYO POLO</li>
    <li>SIANG HOTEL</li>
    <li>HOTEL PAYENG</li>
    <hr>
    <h3 class="text-dark my-3">Subdivision & Blocks</h3>
    <p>There are 4(four) Blocks in East Siang District and they are:</p>
    <li>Mebo</li>
    <li>Nari Koyu</li>
    <li>Pasighat</li>
    <li>Ruksin</li>
    <hr>
    <h3 class="text-dark my-3">Police</h3>
    <p>There are 5(five) Police Stations in East Siang District</p>
    <li>Pasighat Police Station</li>
    <li>Ruksin Police Station</li>
    <li>Mebo Police Station</li>
    <li>Oyan Police Station</li>
    <li>Nari Police Station</li>
    <br>
    <br>
</div>
@endsection