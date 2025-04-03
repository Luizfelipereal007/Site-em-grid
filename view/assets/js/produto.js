            document.addEventListener('DOMContentLoaded', function() {
            const nomeInput = document.querySelector('input[name="nome"]');
            const descricaoInput = document.querySelector('textarea[name="descricao"]');
            const precoInput = document.querySelector('input[name="preco"]');
            const imagemInput = document.querySelector('input[name="imagem_url"]');
            
            const previewNome = document.querySelector('.produto-preview-info h4');
            const previewDescricao = document.querySelector('.produto-preview-descricao');
            const previewPreco = document.querySelector('.produto-preview-preco');
            const previewImagem = document.querySelector('.imagem-preview img');
            const noImage = document.querySelector('.no-image');
            
            if (nomeInput && previewNome) {
                nomeInput.addEventListener('input', function() {
                    previewNome.textContent = this.value || 'Nome do Produto';
                });
            }
            
            if (descricaoInput && previewDescricao) {
                descricaoInput.addEventListener('input', function() {
                    previewDescricao.textContent = this.value || 'Descrição do produto';
                });
            }
            
            if (precoInput && previewPreco) {
                precoInput.addEventListener('input', function() {
                    const valor = parseFloat(this.value) || 0;
                    previewPreco.textContent = 'R$ ' + valor.toLocaleString('pt-BR', {minimumFractionDigits: 2, maximumFractionDigits: 2});
                });
            }
            
            if (imagemInput && (previewImagem || noImage)) {
                imagemInput.addEventListener('input', function() {
                    if (this.value) {
                        if (noImage) {
                            const imgElement = document.createElement('img');
                            imgElement.src = this.value;
                            imgElement.alt = 'Pré-visualização do produto';
                            noImage.parentNode.replaceChild(imgElement, noImage);
                        } else if (previewImagem) {
                            previewImagem.src = this.value;
                        }
                    } else if (previewImagem) {
                        const noImageDiv = document.createElement('div');
                        noImageDiv.className = 'no-image';
                        noImageDiv.textContent = 'Sem imagem';
                        previewImagem.parentNode.replaceChild(noImageDiv, previewImagem);
                    }
                });
            }
        });