<template>
    <main>
        <div class="container-fluid py-4">
            <div class="row">
                <!-- Button trigger modal -->
                <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
               Crear nuevo cargo
                </button>
            </div>

            <div class="row">
                <div class="row mt-4">
                    <div class="col"></div>
                    <div class="col"></div>
                    <div class="col">
                        <input type="search" name="buscar" id="buscar" v-model="buscar" class="form-control" placeholder="Buscar Empresa o Encargado">
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="card">
                        <b-table
                            :items="cargos"
                            :fields="fields"
                            striped 
                            hover
                            :filter="buscar"
                            :filter-included-fields="filterOn"
                            :current-page="currentPage"
                            :per-page="perPage"
                            show-empty
                            responsive
                            small
                            empty-text="No hay cargos registrados"
                            class=" table mb-0"
                        >
                            
                        </b-table>
                    </div>
                </div>
            </div>
        </div>



        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Descripción cargo</h5>
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close" id="close_crear">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form @submit.prevent="crear_cargo">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Cargo</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ejemplo: Cliente" v-model="arrayCargoCreate.cargo">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn bg-gradient-primary">Crear</button>
                    </div>
                </form>
                </div>
            </div>
        </div>

    </main>
</template>

<!-- Aqui se ejecutan las funciondes correspondientes del crud y variabes que se van a usar -->
<script>
    export default ({
        data() {
            return{
                cargos: null,
                arrayCargoCreate: {
                    cargo: ''
                },

                totalRows: 1,
                currentPage: 1,
                perPage: 5,
                buscar: null,
                filterOn: [],

                fields: [
                    {key: 'cargo', label: 'Cargo', class: 'text-center'},
                    {key: 'act', label: 'Acivar / Desactivar', class: 'text-center'},
                    {key: 'editar', label: 'Editar', class: 'text-center'},
                    {key: 'eliminar', label: 'Eliminar', class: 'text-center'}
                ],
            }
        },

        mounted() {
            /* Aqui ejecutamos la funcion de manera automatica a penas estemos en la vista */
            this.get_cargos();
        },

        methods: {
            /* Limpiar una vex creado el cargo y cerrar el modal de crear */
            limpiar:function(){
                this.arrayCargoCreate = {
                    cargo: ''
                };
                /* jquery para cerrar el modal */
                document.getElementById('close_crear').click();
            },

            /* async lo que hace es que cuando estemos en esa vista se ejecuten las funciones unicamente en la vista actual */
            async get_cargos() {
                /* axios es especifico de vue, es como si fuera ajax */
                axios.get('gestion/cargos/cargos')
                .then(response => {
                    this.cargos = response.data
                })
                .catch(error => {
                    console.log(error)
                })
            },

            async crear_cargo() {
                axios.post('gestion/cargos/create', this.arrayCargoCreate)
                .then(response => {
                    if(response.data[0] == 'El cargo ya existe') {
                        Swal.fire({
                            icon: 'warning',
                            title: 'El cargo ya se encuentra en el sistema',
                            position: 'top-end',
                        });
                    }else{
                        this.limpiar();
                        Swal.fire({
                            icon: 'success',
                            title: 'Cargo creado con exito',
                            position: 'top-end',
                        });
                        /* Una vez creado el cargo se ejecuta la funcion que get que hace la consulta */
                        this.get_cargos();
                    }
                })
                .catch(error => {
                    console.log(error)
                })
            },
        }
    });
</script>