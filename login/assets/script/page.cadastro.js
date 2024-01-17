const $form = document.getElementById("formCadastro");

if ($form) {
    const $inpNome = document.getElementById("inpNome");
    const $inpLogin = document.getElementById("inpLogin");
    const $inpEmail = document.getElementById("inpEmail");
    const $inpSenha = document.getElementById("inpSenha");
    const $inpSenha2 = document.getElementById("inpSenha2");

    const $message = document.getElementById("message");
    $form.addEventListener("submit", function (event) {
        let Nome = $inpNome.value, Login = $inpLogin.value, Email = $inpEmail.value;

        if (Nome.length > 255) return responderFormulario($inpNome, "Nome deve conter menos de 255 caracteres", event);
        if (Login.length > 100) return responderFormulario($inpLogin, "Login deve conter menos de 100 caracteres", event);
        if (Email.length > 255) return responderFormulario($inpEmail, "Email deve conter menos de 255 caracteres", event);

        let Senha = $inpSenha.value, Senha2 = $inpSenha2.value;

        if (Senha.length < 8) return responderFormulario($inpSenha, "Senha deve conter mais de 8 caracteres", event);
        if (Senha.length > 20) return responderFormulario($inpSenha, "Senha deve conter menos de 20 caracteres", event);
        if (Senha !== Senha2) return responderFormulario($inpSenha, "Senhas não coincidem", event);
    });
    function responderFormulario(el, textMessage = "", event) {
        $message.innerText = textMessage;
        if (el instanceof Element) el.focus();
        event.preventDefault();
    }
}