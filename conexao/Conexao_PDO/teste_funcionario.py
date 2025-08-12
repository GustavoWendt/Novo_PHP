from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
import os

url = 'http://localhost:8080/Gustavo_Wendt_PHP/Novo_PHP/conexao/Conexao_PDO/InserirCliente.php'
caminho_foto = os.path.abspath("foto_teste.jpg")

driver = webdriver.Chrome()

try:
    driver.get(url)
    wait = WebDriverWait(driver, 10)

    # Espera o campo 'nome' estar presente e visível antes de preencher
    campo_nome = wait.until(EC.visibility_of_element_located((By.ID, "nome")))
    campo_nome.send_keys("João Pedro Carlitys")

    campo_cargo = wait.until(EC.visibility_of_element_located((By.ID, "endereco")))
    campo_cargo.send_keys("Rua da rua da casa de alguem")

    campo_telefone = wait.until(EC.visibility_of_element_located((By.ID, "telefone")))
    campo_telefone.send_keys("11999999999")
    
    campo_endereco = wait.until(EC.visibility_of_element_located((By.ID, "email")))
    campo_endereco.send_keys("pipocay01@gmail.com")


    url_antes = driver.current_url

    botao_cadastrar = wait.until(EC.element_to_be_clickable((By.TAG_NAME, "button")))
    botao_cadastrar.click()

    # Espera até que a URL mude para confirmar o submit
    try:
        wait.until(EC.url_changes(url_antes))
        print("Cadastro realizado com sucesso!")
    except:
        print("Falha no cadastro ou tempo de resposta excedido.")

finally:
    driver.quit()

