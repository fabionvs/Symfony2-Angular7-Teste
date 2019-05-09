<?php

/* AppBundle:Security:login_content.html.twig */
class __TwigTemplate_3473b3bd0509e146ab7215e1b16034c9e6e0d3a474229a483b7b9550978fea7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Security:login_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Security:login_content.html.twig"));

        // line 2
        if ( !$this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "id", array(), "any", true, true)) {
            // line 3
            echo "<hr class=\"divider\">
";
            // line 4
            if (($context["error"] ?? $this->getContext($context, "error"))) {
                // line 5
                echo "<div class=\"row\">
    <div class=\"alert alert-danger\">";
                // line 6
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
                echo "</div>
</div>
";
            }
            // line 9
            echo "<form action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
            echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 10
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
    <div class=\"form-group\">
        <label class=\"form-label text-dark\">Email address</label>
        <input class=\"form-control\" placeholder=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
            echo "\" type=\"text\" id=\"username\"
            name=\"_username\" value=\"";
            // line 14
            echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
            echo "\" required=\"required\">
    </div>
    <div class=\"form-group\">
        <label class=\"form-label text-dark\">Password</label>
        <input class=\"form-control\" type=\"password\" placeholder=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
            echo "\" id=\"password\"
            name=\"_password\" required=\"required\">
    </div>
    <div class=\"form-group\">
        <label class=\"custom-control custom-checkbox\">
            <a href=\"forgot-password.html\" class=\"float-right small text-dark mt-1\">I forgot password</a>
            <input type=\"checkbox\" class=\"custom-control-input\">
            <span class=\"custom-control-label text-dark\">Remember me</span>
        </label>
    </div>
    <div class=\"form-footer mt-2\">
        <button type=\"submit\" class=\"btn btn-primary btn-block\">Login</button>
    </div>
</form>
<div class=\"text-center  mt-3 text-dark\">
    Don't have account yet? <a href=\"#registerModal\" data-toggle=\"modal\" data-target=\"#registerModal\">SignUp</a>
</div>
";
        } else {
            // line 36
            echo "<div class=\"team-section text-center\">
    <h5>Você está logado:</h5>
        <div class=\"team-img\">
            <img src=\"";
            // line 39
            echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("upload/user/") . $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "foto", array())), "html", null, true);
            echo "\" class=\"img-thumbnail rounded-circle alt=\" alt=\"\">
        </div>
        <h4 class=\"font-weight-bold dark-grey-text mt-4\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "nome", array()), "html", null, true);
            echo "</h4>
        <a href=\"";
            // line 42
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"><button class=\"btn btn-warning\"><i class=\"fa fa-times\"></i> Fazer Logout</button></a>
        <a href=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_home");
            echo "\"><button class=\"btn btn-default\"><i class=\"fa fa-user\"></i> Área de Usuário</button></a>
    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 43,  98 => 42,  94 => 41,  89 => 39,  84 => 36,  63 => 18,  56 => 14,  52 => 13,  46 => 10,  41 => 9,  35 => 6,  32 => 5,  30 => 4,  27 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% if app.user.id is not defined %}
<hr class=\"divider\">
{% if error %}
<div class=\"row\">
    <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
</div>
{% endif %}
<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    <div class=\"form-group\">
        <label class=\"form-label text-dark\">Email address</label>
        <input class=\"form-control\" placeholder=\"{{ 'security.login.username'|trans }}\" type=\"text\" id=\"username\"
            name=\"_username\" value=\"{{ last_username }}\" required=\"required\">
    </div>
    <div class=\"form-group\">
        <label class=\"form-label text-dark\">Password</label>
        <input class=\"form-control\" type=\"password\" placeholder=\"{{ 'security.login.password'|trans }}\" id=\"password\"
            name=\"_password\" required=\"required\">
    </div>
    <div class=\"form-group\">
        <label class=\"custom-control custom-checkbox\">
            <a href=\"forgot-password.html\" class=\"float-right small text-dark mt-1\">I forgot password</a>
            <input type=\"checkbox\" class=\"custom-control-input\">
            <span class=\"custom-control-label text-dark\">Remember me</span>
        </label>
    </div>
    <div class=\"form-footer mt-2\">
        <button type=\"submit\" class=\"btn btn-primary btn-block\">Login</button>
    </div>
</form>
<div class=\"text-center  mt-3 text-dark\">
    Don't have account yet? <a href=\"#registerModal\" data-toggle=\"modal\" data-target=\"#registerModal\">SignUp</a>
</div>
{% else %}
<div class=\"team-section text-center\">
    <h5>Você está logado:</h5>
        <div class=\"team-img\">
            <img src=\"{{ asset('upload/user/') ~ app.user.foto }}\" class=\"img-thumbnail rounded-circle alt=\" alt=\"\">
        </div>
        <h4 class=\"font-weight-bold dark-grey-text mt-4\">{{ app.user.nome }}</h4>
        <a href=\"{{ path('fos_user_security_logout') }}\"><button class=\"btn btn-warning\"><i class=\"fa fa-times\"></i> Fazer Logout</button></a>
        <a href=\"{{ path('user_home') }}\"><button class=\"btn btn-default\"><i class=\"fa fa-user\"></i> Área de Usuário</button></a>
    </div>
{% endif %}", "AppBundle:Security:login_content.html.twig", "/var/www/html/teste4/src/AppBundle/Resources/views/Security/login_content.html.twig");
    }
}
