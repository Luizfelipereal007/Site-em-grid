INSERT INTO categoria (id, nome) VALUES
(9, 'Desenvolvimento Web'),
(10, 'Banco de Dados'),
(11, 'Inteligência Artificial'),
(12, 'Programação Mobile'),
(13, 'Segurança da Informação'),
(14, 'DevOps'),
(15, 'Cloud Computing'),
(16, 'Internet das Coisas (IoT)'),
(17, 'Desenvolvimento de Jogos'),
(18, 'Big Data & Analytics'),
(19, 'Machine Learning'),
(20, 'Blockchain'),
(21, 'Arquitetura de Software'),
(22, 'Engenharia de Software'),
(23, 'UI/UX Design'),
(24, 'Frameworks Frontend'),
(25, 'Frameworks Backend'),
(26, 'APIs e Integrações'),
(27, 'Microservices'),
(28, 'Programação Funcional'),
(29, 'Programação Orientada a Objetos'),
(30, 'Automação de Testes'),
(31, 'Performance e Escalabilidade'),
(32, 'Edge Computing'),
(33, 'Realidade Aumentada e Virtual'),
(34, 'Chatbots e Assistentes Virtuais'),
(35, 'Low-Code e No-Code'),
(36, 'Desenvolvimento de APIs REST e GraphQL'),
(37, 'Segurança em Aplicações Web'),
(38, 'Gestão de Projetos de Software');





INSERT INTO artigo (id, titulo, conteudo, categoria_id) VALUES
(1, 'Introdução ao HTML5', 'O HTML5 trouxe diversas melhorias...', 9),
(2, 'CSS Flexbox e Grid', 'Aprenda a criar layouts modernos...', 9),
(3, 'JavaScript: Fundamentos Essenciais', 'Entenda os conceitos básicos...', 9),
(4, 'Banco de Dados Relacional vs NoSQL', 'Comparação entre bancos SQL e NoSQL...', 10),
(5, 'REST vs GraphQL: Qual escolher?', 'Entenda as diferenças...', 26),
(6, 'Introdução ao Node.js', 'O que é Node.js e por que ele é tão popular...', 26),
(7, 'Autenticação com JWT no PHP', 'Como implementar autenticação segura...', 37),
(8, 'Laravel: Primeiros Passos', 'Configurando e criando um projeto...', 25),
(9, 'Vue.js: Criando um SPA', 'Guia passo a passo para desenvolver uma SPA...', 24),
(10, 'React vs Angular: Qual escolher?', 'Comparação entre os dois frameworks...', 24),
(11, 'Segurança em Aplicações Web', 'Dicas para proteger sua aplicação...', 37),
(12, 'Docker para Desenvolvedores', 'Aprenda a criar e gerenciar containers...', 14),
(13, 'Microservices com Spring Boot', 'Como estruturar um sistema baseado em microsserviços...', 27),
(14, 'Testes Automatizados com Jest', 'Melhores práticas para testar código JavaScript...', 30),
(15, 'Machine Learning com Python', 'Introdução ao aprendizado de máquina...', 23),
(16, 'Criando um Chatbot com IA', 'Passo a passo para desenvolver um chatbot...', 34),
(17, 'O que é Blockchain?', 'Entenda a tecnologia por trás do Bitcoin...', 20),
(18, 'Big Data: O que você precisa saber', 'Principais conceitos e ferramentas...', 18),
(19, 'Desenvolvendo APIs com FastAPI', 'Como criar APIs rápidas e eficientes...', 26),
(20, 'NoSQL com MongoDB', 'Introdução ao banco de dados NoSQL...', 10),
(21, 'GraphQL na Prática', 'Como utilizar GraphQL...', 26),
(22, 'Kubernetes para Iniciantes', 'Gerenciando containers em escala...', 14),
(23, 'Scrum e Metodologias Ágeis', 'Entenda como funciona o Scrum...', 38),
(24, 'Desenvolvimento Mobile com Flutter', 'Criando aplicativos multiplataforma...', 12),
(25, 'IoT: Internet das Coisas', 'Explorando o mundo da Internet das Coisas...', 16),
(26, 'Cybersecurity: Como se proteger online', 'Boas práticas para segurança...', 13),
(27, 'Criando um E-commerce do zero', 'Passos essenciais para desenvolver uma loja virtual...', 9);





INSERT INTO usuario (id, nome, email, telefone, data_nascimento, cpf) VALUES
(1, 'Ana Souza', 'ana.souza@email.com', '11987654321', '1990-05-15', '12345678901'),
(2, 'Bruno Lima', 'bruno.lima@email.com', '21976543210', '1985-08-20', '23456789012'),
(3, 'Carlos Mendes', 'carlos.mendes@email.com', '31965432109', '1992-12-10', '34567890123'),
(4, 'Daniela Rocha', 'daniela.rocha@email.com', '41954321098', '1988-07-25', '45678901234'),
(5, 'Eduardo Silva', 'eduardo.silva@email.com', '51943210987', '1995-03-30', '56789012345'),
(6, 'Fernanda Costa', 'fernanda.costa@email.com', '61932109876', '1991-09-12', '67890123456'),
(7, 'Gabriel Nunes', 'gabriel.nunes@email.com', '71921098765', '1986-11-18', '78901234567'),
(8, 'Helena Martins', 'helena.martins@email.com', '81910987654', '1993-06-05', '89012345678'),
(9, 'Igor Ribeiro', 'igor.ribeiro@email.com', '91909876543', '1989-04-22', '90123456789'),
(10, 'Juliana Fernandes', 'juliana.fernandes@email.com', '11998765432', '1994-02-14', '01234567890'),
(11, 'Kleber Santos', 'kleber.santos@email.com', '21987654321', '1997-08-09', '11234567891'),
(12, 'Larissa Oliveira', 'larissa.oliveira@email.com', '31976543210', '1996-05-27', '12234567892'),
(13, 'Marcelo Almeida', 'marcelo.almeida@email.com', '41965432109', '1987-10-11', '13234567893'),
(15, 'Otávio Pasdsadasdasd', 'otavio.pereasdasdasdasdasdasira@email.com', '12121212121', '2000-09-08', '12312321312'),
(16, 'asdasdasdas', 'aaaaaa@aaa.com', '123123213123123', '2025-04-26', '12312312123');





INSERT INTO produto (id, nome, descricao, categoria_id, preco, imagem_url) VALUES
(31, 'Notebook Dell Inspiron', 'Notebook Dell com processador i7 e 16GB RAM', 9, 4999.99, 'https://a-static.mlcdn.com.br/1500x1500/notebook-dell-inspiron-i14-i120u-m30-14-fhd-intel-core-5-120u-16gb-1tb-ssd-windows-11-prata-gelo/dell/brpichbto5440gzrkmp/ef106a416ac205dbdf3540c503c7ffd6.jpeg'),
(41, 'Smartphone Samsung Galaxy S23', 'Celular Samsung com câmera de 200MP e 512GB de armazenamento', 32, 5999.99, 'https://m.media-amazon.com/images/I/61lKQWyMdDL._AC_SY741_.jpg'),
(42, 'Cadeira Gamer ThunderX3', 'Cadeira gamer ergonômica e confortável', 10, 1299.90, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqktTq5z_Yfx78mx3ioZmT61FT6xPR666Qsg&s'),
(43, 'Smart TV LG 55” 4K', 'Smart TV 55 polegadas com tecnologia OLED', 11, 3499.00, 'https://www.gigantec.com.br/media/catalog/product/s/m/smart-tv-lg-55ur871c0sa-003_1.jpg'),
(44, 'Console PlayStation 5', 'Console de última geração com SSD ultrarrápido', 15, 4299.00, 'https://m.media-amazon.com/images/I/619BkvKW35L._AC_SX679_.jpg'),
(45, 'Fone de Ouvido JBL Tune 710BT', 'Fone Bluetooth com som potente e graves profundos', 12, 399.99, 'https://m.media-amazon.com/images/I/71wrIZujPIL._AC_SX679_.jpg'),
(46, 'Câmera Canon EOS Rebel T7', 'Câmera DSLR ideal para iniciantes', 13, 2899.90, 'https://m.media-amazon.com/images/I/61VfL-aiToL._AC_SX679_.jpg'),
(47, 'Geladeira Brastemp Frost Free 400L', 'Refrigerador espaçoso e moderno', 14, 3599.00, 'https://images.colombo.com.br/produtos/939883/939883_11_g.jpg'),
(48, 'Relógio Smartwatch Apple Watch SE', 'Relógio inteligente com monitoramento de saúde', 16, 2399.99, 'https://www.apple.com/br/apple-watch-se/images/overview/hero/hero__gk2727ue87qm_large.jpg'),
(49, 'Bicicleta Caloi Explorer 29', 'Mountain bike com quadro de alumínio', 17, 2199.00, 'https://gambaratto.com.br/files/caloi-explorer-sport_8b1a26f5.jpg');