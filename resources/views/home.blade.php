<x-backend>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mt-3">
                <div class="container mt-5">
                  <div class="row">
                    <h1 class="my-5">Let's begin creating powerful shorten URL !</h1>
                    <p>
                      Stay in control of your links with advanced features for
                      shortening, targeting, and tracking.
                    </p>
                    <div class="mb-3 mt-4 row">
                      <div class="col-sm-10">
                        <form action="{{route('shorten.store')}}" method="post">
                          @csrf
                        <input
                          type="text"
                          name="url"
                          class="form-control"
                        />
                        
                      </div>
                      <button type="submit" class="btn btn-primary col-sm-2">
                        Shorten
                      </button>
                      </form>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card my-3">
              <h5 class="card-title">Shorten Result</h5>
                <div class="container mt-5">
                  <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Original URL</th>
                              <th scope="col">URL Key</th>
                              <th scope="col">Shorten URL</th>
                              <th scope="col">Created At</th>
                            </tr>
                            </thead>
                              <tbody>
                                @php $i = 1; @endphp
                                @foreach($shortURL as $url)
                                @php
                                $id = $url->id;
                                $original = $url->destination_url;
                                $shorten = $url->default_short_url;
                                $key = $url->url_key;
                                $time = $url->created_at;
                                
                                @endphp
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$original}}</td>
                                    <td>{{$key}}</td>
                                    <td><a class="shorten_url" href="{{route('short-url',$key)}}" target="_blank" >{{$shorten}}</a></td>
                                    <td>{{$time}}</td>
                                    
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                </div>
            </div>
        </div>
    </div>
</div>

</x-backend>