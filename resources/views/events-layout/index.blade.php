@if (request('title')=='Lomba Fisika')
    @include('events-layout.2lomba-fisika.index')
@elseif (request('title')=='Seminar Nasional')
    @include('events-layout.3seminar-nasional.index')
@elseif (request('title')=='Lomba Cerdas Tangkas Fisika')
    @include('events-layout.4lctf.index')
@elseif (request('title')=='Lomba Karya Tulis Ilmiah')
    @include('events-layout.6lkti.index')
@elseif (request('title')=='Design Competition')
    @include('events-layout.7design.index')
@elseif (request('title')=='Rangking 1')
    @include('events-layout.8ranking-1.index')
@elseif (request('title')=='Mading Competition')
    @include('events-layout.5mading.index')
@elseif (request('title')=='Selfie and Groufie Competition')
    @include('events-layout.13selfie-groufie.index')


@endif
