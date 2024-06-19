function deleteProduct(productId) {
    Swal.fire({
        icon: "warning",
        title: "Tem certeza de que deseja deletar o produto?",
        text: "Essa ação não poderá ser desfeita!",
        showCancelButton: true,
        confirmButtonText: 'Sim, deletar!',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            $.post("deleteProduct.php", { id_produtos: productId }, function(data) {
                if (data.success) {
                    Swal.fire({
                        icon: "success",
                        title: "Sucesso!",
                        text: "Produto deletado com sucesso!",
                    }).then(() => {
                        location.reload();
                    });
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "Erro",
                        text: "Ocorreu um erro ao deletar o produto!",
                    });
                }
            }, "json");
        }
    });
}


function editProduct(productId) {
    Swal.fire({
        title: 'Editar Produto',
        html: 
            '<input id="swal-input1" class="swal2-input" placeholder="Nome do Produto">' +
            '<input id="swal-input2" class="swal2-input" placeholder="Quantidade">' +
            '<input id="swal-input3" class="swal2-input" placeholder="Valor">',
        focusConfirm: false,
        showCancelButton: true,
        preConfirm: () => {
            const newName = document.getElementById('swal-input1').value;
            const newQuantity = document.getElementById('swal-input2').value;
            const newValue = document.getElementById('swal-input3').value;

            if (!newName || !newQuantity || !newValue) {
                Swal.showValidationMessage('Por favor, preencha todos os campos');
                return false;
            }

            return { newName, newQuantity, newValue };
        }
    }).then((result) => {
        if (result.isConfirmed) {
            $.post("editProduct.php", {
                id_produtos: productId,
                nome_produto: result.value.newName,
                qntd_produto: result.value.newQuantity,
                valor_produto: result.value.newValue
            }, function(data) {
                if (data.success) {
                    Swal.fire({
                        icon: "success",
                        title: "Sucesso!",
                        text: "Produto editado com sucesso!",
                    }).then(() => {
                        location.reload();
                    });
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "Erro",
                        text: "Ocorreu um erro ao editar o produto!",
                    });
                }
            }, "json");
        }
    });
}
