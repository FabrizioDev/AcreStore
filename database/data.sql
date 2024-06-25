INSERT INTO produto (
    titulo, 
    descricao, 
    valor, 
    quantidade, 
    imagem
) VALUES (
    'Pc Gamer Completo Mancer, AMD Ryzen 3 3200g, 8gb Ddr4, Ssd 240gb, Monitor + Cadeira Gamer',
    'A linha de pc Gamer completo da Mancer chegou para facilitar sua vida. Configurações pensadas em proporcionar à você cliente, o desempenho de uma máquina pronta para rodar seu jogos e atividades corporativas, domésticas ou de estudos e a praticidade de adquirir Monitor, teclado e mouse na mesma compra.',
    2780.90,
    60,
    '/public/images/2ddca66c53a391267ffdd2b921d2827232387b04222035f7e58818b2312c4ed9.jpg'
), (
    'Smartphone Xiaomi Poco X4 Pro 256gb 5g Tela 6,67'' 8gb Ram Câmera Tripla + Selfie 16mp - Azul',
    'A poderosa tela é muito mais do que apenas um capricho. A série Poco X agora tem uma tela Amoled e é compatível com DCI-P3. A gama de cores ampliada produz detalhes ricos, proporcionando um aspecto cinematográfico. A abertura da câmera frontal é de apenas 2,96 mm, expandindo seu campo de visão. O dispositivo oferece uma sensação delicada com um brilho dinâmico graças ao seu design inovador e à gravação de precisão na sua superfície, tornando-o um raio de luz único atravessando o céu noturno. Pela primeira vez, a poco adotou a câmera principal de 108 mp para fotografias incríveis e ricas em detalhes!',
    2172.92,
    100,
    '/public/images/aff7e4632a443a244d7f70a082abebd0bdaf411a3339e741646ca2a2114a07e7.jpg'
), (
    'Console Playstation 5 - Ps5',
    'Jogar não tem Limites. Desfrute do carregamento extremamente rápido com o SSD de altíssima velocidade, uma imersão mais profunda com suporte a feedback tátil, gatilhos adaptáveis e áudio 3D, além de uma geração inédita de jogos incríveis para Console PlayStation®5 - PS5. Domine o poder de uma CPU e GPU personalizadas e o SSD com E/S integradas que redefinem as regras do que o console PlayStation 5 pode fazer. Descubra uma experiência de jogos mais profunda com compatibilidade com feedback tátil, disparadores adaptáveis e tecnologia de áudio 3D.',
    4499.99,
    35,
    '/public/images/8fee0ae91459fbfd2399beb73b4e385b1e5285994420a7b150ed77bf0ce4d3aa.jpg'
), (
    'Console Nintendo Switch Oled Com Joy-Con Branco',
    'Conheça o novo membro vibrante da família Nintendo Switch. Jogue em casa na TV ou em qualquer lugar com uma tela OLED vibrante de 7 polegadas com o console Nintendo Switch – Modelo OLED. Além de uma nova tela com cores vivas e contraste nítido, o Nintendo Switch- Modelo OLED inclui um amplo acessório de suporte ajustável que permite ângulos de visualização mais confortáveis, uma base com porta para cabo LAN para o modo TV (cabo LAN vendido separadamente), 64 GB de armazenamento interno* e áudio aprimorado nos modos portátil e semiportátil usando os alto-falantes do console.',
    2299.99,
    18,
    '/public/images/52025ae19cb3f8aba387859c6bbf7b11f0ead91273605dacf08aee43ad759236.jpg'
);

-- SENHA DOS USUÁRIOS: 12345678

INSERT INTO usuario (
    nome,
    cpf,
    data_nascimento,
    sexo,
    email,
    senha
) VALUES (
    'Maria Auxiliadora Pereira da Conceição',
    '667.236.940-66',
    '1982-07-19',
    'F',
    'mariaauxpc1982@hotmail.com',
    'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f'
), (
    'João Carlos da Silva Costa',
    '758.167.830-09',
    '1976-02-23',
    'M',
    'joaocscosta@yahoo.com',
    'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f'
), (
    'Eduardo Oliveira Cavalcante',
    '438.793.390-90',
    '2001-11-09',
    'M',
    'eduardoolic2001@gmail.com',
    'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f'
);