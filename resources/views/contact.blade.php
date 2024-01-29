<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div>
    </div>
    <div class="container">
            <h1>Contact us</h1>
            <form action="{{ route('contact.store') }}" method="post">
    @csrf
    @method('post')

    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" aria-describedby="nameError" value="{{ old('name') }}">
        @error('name')
            <div id="nameError" class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" aria-describedby="emailError" value="{{ old('email') }}">
        @error('email')
            <div id="emailError" class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label">Contact</label>
        <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" aria-describedby="phoneError" value="{{ old('phone') }}">
        @error('phone')
            <div id="phoneError" class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-floating">
        <textarea class="form-control @error('message') is-invalid @enderror" placeholder="Leave a message here" name="message">{{ old('message') }}</textarea>
        <label for="message">Message</label>
        @error('message')
            <div id="messageError" class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

    </div>

    <div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Message</th>
    </tr>
  </thead>
  <tbody>
    @foreach($contacts as $contact)
        <tr>
        <td>{{$contact->id}}</td>
        <td>{{$contact->name}}</td>
        <td>{{$contact->email}}</td>
        <td>{{$contact->phone}}</td>
        <td>{{$contact->message}}</td>
        </tr>
    @endforeach
  </tbody>
</table>
    </div>
</body>
</html>
