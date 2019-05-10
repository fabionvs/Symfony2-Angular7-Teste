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
            echo "    ";
            if (($context["error"] ?? $this->getContext($context, "error"))) {
                // line 4
                echo "        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"alert alert-danger\">";
                // line 6
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
                echo "</div>
            </div>
        </div>
    ";
            }
            // line 10
            echo "    <form action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
            echo "\" method=\"post\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 11
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\"/>
        <div class=\"form-group\">
            <label class=\"form-label text-dark\">Email address</label>
            <input class=\"form-control\" placeholder=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
            echo "\" type=\"text\" id=\"username\"
                   name=\"_username\" value=\"";
            // line 15
            echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
            echo "\" required=\"required\">
        </div>
        <div class=\"form-group\">
            <label class=\"form-label text-dark\">Password</label>
            <input class=\"form-control\" type=\"password\" placeholder=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
            echo "\"
                   id=\"password\"
                   name=\"_password\" required=\"required\">
        </div>
        <div class=\"form-footer mt-2\">
            <button type=\"submit\" class=\"btn btn-primary btn-block\">Login</button>
        </div>
    </form>
    <div class=\"text-center  mt-3 text-dark\">
        Não tem uma conta? <a href=\"";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">Cadastre-se</a>
    </div>
";
        } else {
            // line 31
            echo "    <div class=\"team-section text-center\">
        <h5>Você está logado:</h5>
        <h4 class=\"font-weight-bold dark-grey-text mt-4\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
            echo "</h4>
        <a href=\"";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
            <button class=\"btn btn-warning\"><i class=\"fa fa-times\"></i> Fazer Logout</button>
        </a>
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
        return array (  89 => 34,  85 => 33,  81 => 31,  75 => 28,  63 => 19,  56 => 15,  52 => 14,  46 => 11,  41 => 10,  34 => 6,  30 => 4,  27 => 3,  25 => 2,);
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
    {% if error %}
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
            </div>
        </div>
    {% endif %}
    <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\"/>
        <div class=\"form-group\">
            <label class=\"form-label text-dark\">Email address</label>
            <input class=\"form-control\" placeholder=\"{{ 'security.login.username'|trans }}\" type=\"text\" id=\"username\"
                   name=\"_username\" value=\"{{ last_username }}\" required=\"required\">
        </div>
        <div class=\"form-group\">
            <label class=\"form-label text-dark\">Password</label>
            <input class=\"form-control\" type=\"password\" placeholder=\"{{ 'security.login.password'|trans }}\"
                   id=\"password\"
                   name=\"_password\" required=\"required\">
        </div>
        <div class=\"form-footer mt-2\">
            <button type=\"submit\" class=\"btn btn-primary btn-block\">Login</button>
        </div>
    </form>
    <div class=\"text-center  mt-3 text-dark\">
        Não tem uma conta? <a href=\"{{ path('fos_user_registration_register') }}\">Cadastre-se</a>
    </div>
{% else %}
    <div class=\"team-section text-center\">
        <h5>Você está logado:</h5>
        <h4 class=\"font-weight-bold dark-grey-text mt-4\">{{ app.user.id }}</h4>
        <a href=\"{{ path('fos_user_security_logout') }}\">
            <button class=\"btn btn-warning\"><i class=\"fa fa-times\"></i> Fazer Logout</button>
        </a>
    </div>
{% endif %}", "AppBundle:Security:login_content.html.twig", "/var/www/html/Symfony2-Angular7-Teste/src/AppBundle/Resources/views/Security/login_content.html.twig");
    }
}
