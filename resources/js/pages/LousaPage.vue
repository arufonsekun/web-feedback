<template>
    <section>
      <div class="row d-flex align-items-center">
          <div class="col-sm-12 col-md-8 text-right">
            <h2>Lousa virtual </h2>
            <p>A lousa virtual permite que você faça interações online de uma forma fácil, criativa e com bastante interação.</p>
          </div>
          <div class="col-sm-12 col-md-4">
            <img class="img-lousa" :src="img" alt="">
          </div>
      </div>
      <hr>
      <div class="row d-flex align-items-center">
          <div class="col-sm-12 col-md-8 text-right">
            <p><strong>Quer seu próprio espaço de interação?</strong></p>
          </div>

          <div class="col-sm-12 col-md-12">
            <form v-bind:action="create" method="POST">
              <div class="row">
                <div class="col-md-4">
                  <input type="text" v-model="name" placeholder="Nome da lousa"> 
                </div>
                <div class="col-md-4">
                  <input type="text" v-model="hash" placeholder="Hash da lousa">
                </div>
                <div class="col-md-4">
                  <input type="text" v-model="data" placeholder="Informações da lousa">
                </div>
              </div>
              <button type="button" class="btn btn-warning" @click="create">
                Criar nova lousa
              </button>
            </form>
          </div>  

      </div>
      <div class="row d-flex align-items-center pt-5">
        <h2> Suas lousas</h2>
      </div>

    </section>
</template>

<script>
  import Auth from './../service/Auth';
  export default {
      name:"lousas",
      props: ['user', 'token'],
      data(){
        return {
          img:'/img/undraw.co/undraw_professor_8lrt.png',
          hash: '',
          name: '',
          data: ''
        }
      },
      methods: {

        handleSuccess(response) {
          console.log(response);
        },

        handleError(err) {
          console.log(err);
        },

        async create(){
          Auth.check(this.token);      
          
          let data = {
              'user_id': this.user.id,
              'name': this.name,
              'hash': this.hash,
              'data': this.data
          };

          try {
              let response = await window.axios.post('/api/lousas', data,{
                  headers:{
                      'Authorization': `Bearer ${this.token.access_token}`
                  },
              });
              this.handleSuccess(response);
          }
          catch(err) {
              this.handleError(err);
          }
        }
      }
  }
</script>

<style scoped>
  .img-lousa{
      width: 400px;
  }
</style>