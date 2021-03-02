<template>
    
<html>
  <head></head>
  <body>
    <div id="crud" class="container">
     <h3>CRUD VUE.JS</h3>
      
        <div class="panel panel-default" v-show="show">
        <div class="panel-heading">   Registrar     
        </div>
        <div class="panel-body">   
          <form>
            <div class="form-group">
              <input type="text" class="form-control hidden" placeholder="Ingrese un titulo" v-model="id"/>
              <input type="text" class="form-control" placeholder="Ingrese un titulo" v-model="title"/>
            </div>
            <div class="form-group">
              <textarea type="text" class="form-control" placeholder="Ingrese el contenido" v-model="body">                      </textarea>
            </div>
          </form>
        </div>
        <div class="panel-footer">
          <button class="btn btn-danger" v-on:click="cerrar" ><i class="fa fa-undo"></i> Cancelar</button>
          <button class="btn btn-primary" v-on:click="add"><i class="fa fa-save"></i> Guardar</button>
        </div>
      </div>
      
      <div class="panel panel-primary" v-show="!show">
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-6">  
              <span>LISTADO DE POST</span>
            </div>
            <div class="col-xs-6" style="text-align:right"> 
              <button class="btn btn-success" v-on:click="nuevo"><i class="fa fa-plus"></i> Nuevo</button>
            </div>
          </div>
        </div>
        <div class="panel-body">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Body</th>
              </tr>
            </thead>
              <tbody>
                <tr v-for="p in listado"  v-bind:key="p">
                  <td>{{ p.id }}</td>
                  <td>{{ p.title }}</td>
                  <td>{{ p.body }}</td>
                </tr>
              </tbody>
          </table>
        </div>
      </div>
      
    
    </div>
  </body>
</html>

</template>
<script>
var app = new Vue({
  el:"#crudtablets",
  data:{
    listado:[],
    id:0,
    title:'',
    body:'',
    show:false
  },
  methods:{
    listaTodos : function(){
       axios.get('https://jsonplaceholder.typicode.com/posts?_page=2&_limit=10').then( e => {        
        this.listado = e.data
      } );
    },
    add : function(){
      axios.post('https://jsonplaceholder.typicode.com/posts',{
        title: this.title,
        body: this.body
      }).then( resp => {
        alert(resp);
      }).catch(ex =>{
        alert(ex);
      });
    },
    nuevo : function(){
      this.show = true;
    } ,
    cerrar : function(){
      this.show = false;
    } 
  },
  created: function(){
    this.listaTodos();
  }
});
</script>