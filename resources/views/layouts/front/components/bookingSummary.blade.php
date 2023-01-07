<div class="card">
   <div class="card-body">
       <form action="select" method="post">
           @csrf
           <h2>Pick-up</h2>
           <input type="datetime-local" name="puDate" id="" value="{{$post->puDate}}" hidden>
           <h6>@php echo date('d F Y, H:i', strtotime($post->puDate) ) @endphp</h6>
           <h6>{{$post->puLoc[0]['name']}}</h6>
           <input type="text" name="puLoc" value="{{$post->puLoc[0]['id']}}" hidden>
           <div class="p-2"></div>
           <h2>Drop Off</h2>
           <input type="datetime-local" name="doDate" id="" value="{{$post->doDate}}" hidden>
           <h6>@php echo date('d F Y, H:i', strtotime($post->doDate) ) @endphp</h6>
           <h6>{{$post->doLoc[0]['name']}}</h6>
           <input type="text" name="doLoc" value="{{$post->doLoc[0]['id']}}" hidden>
           <div class=" pt-3 d-flex justify-content-end">
               <button class="text-danger">Change Cars</button>
           </div>
       </form>
   </div>
</div>