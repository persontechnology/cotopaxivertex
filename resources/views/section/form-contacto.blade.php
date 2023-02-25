<form method="post" action="{{ route('enviar-contacto') }}" id="contact-forms">

    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>Mensaje enviado,</strong> gracias por preferirnos.
        </div>    
    @endif
    
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    @csrf
      <div class="row">
         <div class="col-md-6">
            <div class="form-group">
               <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" placeholder="Su nombre" required>
               @error('nombre')
               <div class="invalid-feedback">
                    {{ $message }}
              </div>
               @enderror
            </div>
         </div>
         <div class="col-md-6">
            <div class="form-group">
               <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Tu correo electrónico" required>
               @error('email')
                <div class="invalid-feedback">
                        {{ $message }}
                </div>
               @enderror
            </div>
         </div>
      </div>
      <div class="form-group">
         <input type="text" class="form-control @error('asunto') is-invalid @enderror" name="asunto" placeholder="Tu asunto" required>
         @error('asunto')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
      </div>
      <div class="form-group">
         <textarea name="mensaje" cols="30" rows="5" class="form-control @error('mensaje') is-invalid @enderror" placeholder="Escribe tu mensaje"></textarea>
            @error('mensaje')
               <div class="invalid-feedback">
                    {{ $message }}
              </div>
            @enderror
      </div>
      <button type="submit" class="contact-btn"> <i class="far fa-paper-plane"></i> Enviar mensaje</button>
      <div class="col-md-12 mt-3">
         <div class="form-messege text-success"></div>
      </div>
   </form>