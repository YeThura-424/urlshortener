<x-backend>
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
        <div class="col-md-11">
            <div class="card my-3">
              <h5 class="card-title">Link Visit Information</h5>
                <div class="container mt-5">
                  <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Original URL</th>
                            <th scope="col">Shorten URL</th>
                            <th scope="col">URL Ip</th>
                            <th scope="col">Operating System</th>
                            <th scope="col">Created At</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php $i = 1; @endphp
                                @foreach($shortURLVisit as $urlVisit)
                                @php
                                $id = $url->id;
                                $originalurl = $urlVisit->shortURL->destination_url;
                                $shortenurl = $urlVisit->shortURL->default_short_url;
                                $url_key= $urlVisit->shortURL->url_key;
                                $url_ip = $urlVisit->ip_address;
                                $operating_sys = $urlVisit->operating_system;
                                $visited_at = $urlVisit->visited_at;
                                
                                @endphp
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$originalurl}}</td>
                                    <td><a class="shorten_url" href="{{route('short-url',$url_key)}}" target="_blank" >{{$shortenurl}}</a></td>
                                    <td>{{$url_ip}}</td>
                                    <td>{{$operating_sys}}</td>
                                    <td>{{$visited_at}}</td>
                                    
                                </tr>
                                @endforeach
                          </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</x-backend>