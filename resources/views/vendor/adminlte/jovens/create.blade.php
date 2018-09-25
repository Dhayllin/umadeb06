<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style>
    /*-----Background-----*/

body{
     background-image:url("../img/fundo_main.jpeg");
	 background-repeat:no-repeat;
	 background-size:cover;
	 width:40%;
	 height:40%;
	 overflow:auto;
}
/*Contact sectiom*/
.content-header{
  
  font-family: 'Teko', sans-serif;
  color:#fcc500;
  font-size: 25px;
}

.section-content{
  
  text-align: center; 

}
#contact{
    
  font-family: 'Teko', sans-serif;
  padding-top: 40px;
  width: 100vw;
}
.contact-section{  
  padding-top: 20px;
}
.contact-section .col-md-6{
  width: 100%;
}
label{
    align: center; 
  font-size: 1.3em;
  line-height: 1em;
  font-weight: normal;
  color: #fff;
}
.form-control{
    align: center; 
  font-size: 1.3em;
  color: #080808;
}
 h1,h2{
    align: center; 
    color: #fff;
}

.submit{
  align: center; 
  font-size: 1.1em;
  float: right;
  width: 150px;
  background-color: #be5c90;
  color: #fff;

}


</style>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.js"></script>

<section id="contact">
<a href="https://api.whatsapp.com/send?l=pt&amp;phone=5561993252715&text=Irmão Anderson, a paz do senhor. Sobre as inscrições pelo site, tive problemas em "><img src="https://i.imgur.com/XMsxHpu.png" style="height:150px; position:fixed; bottom: 30px; right: 0px; z-index:100;" data-selector="img"></a>
    <div class="contact-section">        	
        <div class="container">
            <div class="section-content "><br> <br><br> <br><br> <br><br> <br><br>
                    <h1 class="section-header"><strong>I CAPACITAR JOVENS </strong><span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"></span></h1>                   
                    <h2 class="section-header"> Inscreva-se para participar <h2>
                    <h3 class="section-header"> <span class="content-header"><strong> 14 de outubro de 2018, 10h ás 16h</strong></span><h3>
            </div>

            @if(Session::has('mensagem_sucesso'))
            <div class="alert alert-success">{{ Session::get('mensagem_sucesso')}}</div>
            @endif  

            @if(Session::has('mensagem_sucesso_warning'))
            <div class="alert alert-warning">{{ Session::get('mensagem_sucesso_warning')}}</div>
            @endif  

            <form method="POST" action="{{ route('jovens.store') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="col-md-12 form">
                    <div class="form-group">
                        <label for="nome"><strong>Nome</strong></label>
                        <input type="text" class="form-control" id="nome"name="nome" placeholder="Nome"required>
                    </div><br>
                    <div class="form-group">
                            <label for="idade"> <strong>Idade</strong></label>
                            <input type="number"id="idade" name="idade" class="form-control" >
                    </div><br>
                    <div class="form-group">
                        <label for="telephone"><strong>Whatsapp/Celular</strong></label>
                        <input type="tel" class="form-control"  name="telefone" id="telefone" placeholder="61 9XXX-XXXX" required>
                    </div><br>
                    <div class="form-group">
                        <label for="cargo"><strong>Cargo UMADEB</strong></label>
                        <input type="cargo" name="cargo"class="form-control" id="cargo" placeholder="Ex. Líder de  Joves, Ex. Rejente na Ass. Missão">
                    </div><br>                
                    <div class="form-group">
                            <label for="igreja_id"><strong>Igreja ADEB</strong></label>
                        <select name ="igreja_id"class="form-control">
                            <option value="">Selecione </option>
                            @foreach ($igrejas as $igreja)
                            <option value="{{$igreja->id}}">{{$igreja->descricao}}</option>
                            @endforeach                           
                        </select> 
                    </div><br>
                    <form class="form-group">
                        <label for="igreja_diff"><strong>Outra</strong></label>
                        <input type="text" class="form-control" id="igreja_diff"  name="igreja_diff" placeholder="Ex. Igreja Ass. Missão, paranoá QD. 17">
                    </form>  
                      <br>
                    <div class="alert alert-danger" role="alert">
                        Aguarde a confirmação de envio, em caso de erro entre em contato pelo icone do Whatsapp.
                    </div> 
                    <br>                 
                    <button type="submit" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i> <strong>Enviar</strong> </button>            
                </div>               
            </form>         
        </div>
    </div>
</section>	

<script>	 
$(document).ready(function (){
    $('.telefone').mask('(00) 00000-0000');  
})
</script>