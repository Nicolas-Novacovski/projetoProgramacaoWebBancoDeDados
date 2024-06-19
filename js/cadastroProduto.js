    $(document).ready(function() {
        $('#cadastroProduto').on('submit', function(event) {
            event.preventDefault(); // Impede o envio padrão do formulário
            var event = true;
            var nome_produto = $("#nome_produto").val();
            var qntd_produto = $("#qntd_produto").val();
            var valor_produto = $("#valor_produto").val();
            
            if (nome_produto == "" || nome_produto == null) {
                event = false;
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Preencha o campo de nome do produto!",
                  });
            } 

            if (qntd_produto == "" || qntd_produto == null) {
                event = false;
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Preencha o campo de quantidade de produto!",
                  });
            }

            if (valor_produto == "" || valor_produto == null) {
                event = false;
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Preencha o campo de valor do produto!",
                  });
            }


            if (event == true) {
                var formData = {
                    nome_produto: $('#nome_produto').val(),
                    qntd_produto: $('#qntd_produto').val(),
                    valor_produto: $('#valor_produto').val()
                };
                $.ajax({
                    type: 'POST',
                    url: 'cadastroProduto.php', // O script PHP que processa os dados
                    data: formData,
                    dataType: 'json',
                    encode: true,
                    success: function(response) {
                        // Exibe uma mensagem de sucesso ou redireciona
                        if (response.success) {
                            Swal.fire({
                                icon: "success",
                                title: "OK!",
                                text: "Produto cadastrado com sucesso!",
                              }).then((result) => {
                                console.log(result);
                                if (result.isConfirmed || result.isDismissed) {
                                    window.location.href = 'cadastroProdutos.php';
                                }
                            });
                        } else {
                            Swal.fire({
                                icon: "error",
                                title: "Oops...",
                                text: "Não foi possível cadastrar o produto!",
                            });
                            window.location.href = 'cadastroProdutos.php';
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Erro:', error); // Log do erro
                        console.error('Status:', status); // Log do status
                        console.error('Resposta:', xhr.responseText); // Log da resposta do servidor
                        alert('Erro ao tentar enviar os dados.');
                    }
                });
            }
        });
    });
