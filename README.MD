# 🚀 Notify Privacy  

Descrição breve do projeto, explicando sua finalidade e principais funcionalidades.  

---

## 📌 **Requisitos**  

Antes de começar, certifique-se de ter os seguintes requisitos instalados em sua máquina:  

- [Docker](https://www.docker.com/get-started)  
- [Docker Compose](https://docs.docker.com/compose/install/)  

---

## 🛠 **Instalação e Configuração**  

### 1️⃣ **Clone o Repositório**  
```bash
git clone https://github.com/Freirelf/notify-privacy.git
cd seu-repositorio
```

### 2️⃣ **Copie o arquivo de variáveis de ambiente**  
```bash
cp .env.example .env
```
⚠ **Obs:** Configure as variáveis do `.env`, se necessário.  

---

## ▶️ **Rodando o Projeto**  

### 3️⃣ **Subindo os Containers (Docker)**  
```bash
docker-compose up -d --build
```
📌 **O que esse comando faz?**  
- `up -d` → Inicia os containers em modo _detach_ (em segundo plano).  
- `--build` → Garante que a imagem seja construída corretamente.  

### 4️⃣ **Acesse o Projeto**  
Após a inicialização, acesse no navegador:  
```bash
http://localhost:8080
```
📌 **Obs:** Substitua a porta `8080` se o projeto estiver configurado para rodar em outra.  

---

## ⚙ **Comandos Úteis**  

### 📦 **Gerenciar Containers**  
- **Parar os containers:**  
  ```bash
  docker-compose down
  ```  
- **Reiniciar os containers:**  
  ```bash
  docker-compose restart
  ```

### 🛠 **Rodar Migrations**  
Caso seja necessário rodar as migrations, utilize:  
```bash
docker-compose exec app php artisan migrate
```
📌 **Obs:** Substitua `php artisan migrate` pelo comando necessário para o seu framework (Symfony, Laravel, etc.).  

---

## 🔍 **Testando a Aplicação**  

### **Autenticação**  
1. **Usuário Padrão:**  
   - **E-mail:** `admin@email.com`  
   - **Senha:** `admin123`  

2. **Fluxo de Login:**  
   - Acesse `/login`  
   - Insira o e-mail e senha acima ou crie um novo
   - Após o login, um **modal** será exibido com a atualização de privacidade  

---

## 🐞 **Debug & Erros**  

Caso encontre problemas ao rodar o projeto:  

1️⃣ **Verifique se os containers estão rodando corretamente:**  
```bash
docker ps
```  

2️⃣ **Cheque os logs do container principal:**  
```bash
docker-compose logs -f app
```  

3️⃣ **Se houver erro no banco de dados, tente rodar:**  
```bash
docker-compose exec app php artisan migrate --seed
```