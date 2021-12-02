<div>
    <button type="button" class="btn btn-warning flex-shrink-1 text-white text-center" data-toggle="modal"
        data-target="#new_category">
        <i class="fas fa-plus-square mr-2"></i> Crear categoría
    </button>

    <!-- Modal -->
    <div class="modal fade" id="new_category" tabindex="-1" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear nueva categoría</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nombre de la categoría: </label>
                        <input wire:model.defer="name" id="name" type="text"
                            class="form-control @error('name') is-invalid @enderror"
                            placeholder="Escriba el nombre de la categoría...">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button wire:click.prevent="store" wire:target="store" wire:loading.attr="disabled"
                        class="btn btn-warning text-white">
                        <img wire:loading wire:taget="store" src="{{ asset('./img/loading.gif') }}"> Crear
                        categoría</button>
                </div>
            </div>
        </div>
    </div>
</div>
