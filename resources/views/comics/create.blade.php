@extends('layout.app')

@section('content')

    <h1 class="text-center text-white">Inserisci nuovo fumetto</h1>
    <div class="row bg-white">
        <div class="col-12">


            <form action="{{route('comics.store')}}" method="POST" class="p-4">
                @csrf

                  <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                  </div>

                  <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="description" name="description"></textarea>
                  </div>

                  <div class="mb-3">
                    <label for="thumb" class="form-label">Thumb url</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" required>
                  </div>

                  <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                   <select name="type" id="type" required>
                    <option value="comic book">Comic Book</option>
                    <option value="graphic novel">Graphic Novel</option>
                   </select>
                  </div>

                  <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" id="price" name="price" aria-describedby="priceHelp" required>
                  </div>

                  <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" id="series" name="series" required>
                  </div>

                  <div class="mb-3">
                    <label for="sale_date" class="form-label">Data di uscita</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date" required>
                  </div>
                  <button type="submit" class="btn btn-success">Submit</button>
                  <button type="reset" class="btn btn-primary">Reset</button>

            </form>


        </div>
    </div>



@endsection



