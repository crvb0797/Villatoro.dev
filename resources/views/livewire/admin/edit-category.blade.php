<div>
    <button type="button" class="cursor-pointer btn btn-info btn-small" data-toggle="modal" data-target="#edit_category">
        <i class="fas fa-pen mr-2"></i> Editar
    </button>
    <!-- Modal -->
    <div class="modal fade" id="edit_category" tabindex="-1" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar la categoría</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nombre de la categoría: </label>
                        <input wire:model.defer="category.name" id="name" type="text"
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
                    <button wire:click.prevent="save" wire:target="store" wire:loading.attr="disabled"
                        class="btn btn-warning text-white">
                        <img wire:loading wire:taget="save" src="{{ asset('./img/loading.gif') }}"> Actualizar
                        categoría</button>
                </div>
            </div>
        </div>
    </div>
</div>
