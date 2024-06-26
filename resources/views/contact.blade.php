<x-main>

    <div class=" container">
        <form action="{{ route('send')}}" method="POST">
            @csrf
            <div class="  mb-3">
            <label for="email" class="form-label">email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Inserisci la tua mail" value="{{old('email')}}">
            @error('email')
                {{$message}}
                
            @enderror
          </div>
          <div class="mb-3">
            <label for="text" class="form-label">Testo</label>
            <input class="form-control" id="text" rows="3"  name="text" placeholder="Inserisci il tuo messagio" value="{{old('text')}}"></input>
            @error('text')
                {{$message}}
                
            @enderror
          </div>
          <button class="btn btn-dark" type="submit">Invia</button>
      
        </form>
     </div> 




</x-main>