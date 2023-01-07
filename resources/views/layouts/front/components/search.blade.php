
<div class="container-fluid position-relative p-0 w-75">
    <div class="position-relative px-lg-5" style="z-index: 9;">
        <form action="select" method="POST">
            @csrf
            <div class="container-fluid px-lg-5">
                <div class="row mx-n2 bg-primary py-3 d-flex align-items-centers">
                    <div class="searchbox col-md-7 text-light">
                        <div class="form-group">
                            <label for="" class="custom-select-label">Pickup Location</label>
                            <select class="custom-select px-4 " name="puLoc" id="puLoc">
                                @foreach ($locations as $location)
                                    <option value="{{ $location->id}}">{{ $location->name}}</option>
                                @endforeach
                            </select>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input mb-3" id="returnLoc" onchange="returndiffloc()">
                                <label class="form-check-label" for="returnLoc">Dropoff at different locations</label>
                            </div>
                        </div>
                        @error('puLoc')
                            <div class="text-danger bg-dark rounded text-sm">
                            {{ $message}}
                            </div>
                        @enderror
                        <div class="form-group panel" id="panel">
                            <label for="" class="custom-select-label">Dropoff Location</label>
                            <select class="custom-select px-4"  name="doLoc" id="doLoc">
                                <option selected value="">Drop Location</option>
                                @foreach ($locations as $location)
                                    <option value="{{ $location->id}}">{{ $location->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="form-control-label">Pickup Date</label>
                                    <input type="datetime-local" name="puDate" id="puDate" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="form-control-label">Drop Off Date</label>
                                    <input type="datetime-local" name="doDate" id="doDate" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                
                            </div>
                            {{--<div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="custom-select-label">Age</label>
                                    <select class="custom-select" name="age" id="age" class="form-control">
                                        @foreach ($ages as $age)
                                        <option value="{{$age}}" 
                                        @if ($age == '30-60')
                                            selected
                                        @endif>{{$age}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>--}}
                        </div>
                        <button type="submit" class="btn btn-block btn-dark">Search</button>
                    </div>
                    
                    
                    @error('doLoc')
                        <div class="text-danger bg-dark rounded text-sm">
                        {{ $message}}
                        </div>
                    @enderror
                    <div class="searchimg col-md-5">
                        <img class="w-100" src="{{ asset('frontend/img/carousel-1.jpg') }}" alt="Image">
                    </div>
                </div>

            </div>
            
        </form>
    </div>
</div>
<script>
function returndiffloc(){
    var returnCB = document.getElementById('returnLoc')
    var dropdown = document.getElementById('panel')
    if(returnCB.checked){
        dropdown.style.maxHeight = dropdown.scrollHeight + "px";
    } else {
        dropdown.style.maxHeight = null;
    }
}
</script>