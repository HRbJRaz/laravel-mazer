<!-- Page Header Start -->
<section>
    <div class="container-fluid pt-3 px-lg-5">
        <div class="row">
            <div class="col-md-10">
                <form action="select" method="post" id="search">
                    @csrf
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <label class="form-control-label" for="puLoc">Pickup Location</label>
                            <select class="custom-select px-4 " name="puLoc" id="puLoc">
                            @foreach ($locations as $location)
                                <option
                                @if ($post->puLoc == $location->id)
                                    selected
                                @endif
                                value="{{ $location->id}}">{{ $location->name}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <label class="form-control-label" for="doLoc">Dropoff Location</label>
                            <select class="custom-select px-4 mb-3" name="doLoc" id="doLoc">
                            @foreach ($locations as $location)
                                <option 
                                @if ($post->doLoc == $location->id)
                                    selected
                                @endif
                                value="{{ $location->id}}">{{ $location->name}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <label class="form-control-label" for="puLoc">Pick Up Date</label>
                            <input type="datetime-local" class="form-control" name="puDate" id="puDate" value="{{$post->puDate}}"/>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <label class="form-control-label" for="doDate">Drop Off Date</label>
                            <input type="datetime-local" class="form-control" name="doDate" id="doDate" value="{{$post->doDate}}"/>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-2 pt-2">
                <button class="btn btn-block rounded-lg btn-primary" style="height:100%" type="submit" form="search"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </div>
    </div>
</section>
<!-- Page Header Start -->