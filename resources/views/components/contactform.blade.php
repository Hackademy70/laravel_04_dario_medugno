<form action="{{ route('contact.send') }}" method="post">
    @csrf
    <div class="mb-3">
      <label for="tuonome" class="form-label">Tuo Nome</label>
      <input type="text" class="form-control" name="tuonome" id="exampleInputEmail1" aria-describedby="emailHelp">
     
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Cerca Strumento</label>
        <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Richiedi Informazioni</label>
        <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>