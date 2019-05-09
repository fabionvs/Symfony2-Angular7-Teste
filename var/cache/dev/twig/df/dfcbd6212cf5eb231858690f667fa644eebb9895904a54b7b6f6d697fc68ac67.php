<?php

/* AppBundle:Contatos:new.html.twig */
class __TwigTemplate_fa6de8226264f02d375bdac12657af0dc772a58d9c071b40dd20f2bb7c9c1a70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::Layout.html.twig", "AppBundle:Contatos:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Contatos:new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Contatos:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <h1>Novo Contato</h1>
        ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Nome</label>
                    <input type=\"text\" class=\"form-control\" name=\"nome\" required
                           placeholder=\"Digite seu nome\">
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Email</label>
                    <input type=\"email\" class=\"form-control\" name=\"email\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" required
                           placeholder=\"Digite seu email\">
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Telefone</label>
                    <input type=\"text\" class=\"form-control\" name=\"telefone\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" required
                           placeholder=\"Digite seu telefone\">
                </div>
            </div>
        </div>
        <input type=\"submit\" class=\"btn btn-success\" value=\"Criar Contato\"/>
        <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\"><button type=\"button\" class=\"btn btn-secondary ml-4\">Voltar</button></a>
        ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Contatos:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 32,  81 => 31,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle::Layout.html.twig' %}

{% block body %}
    <div class=\"container\">
        <h1>Novo Contato</h1>
        {{ form_start(form) }}
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Nome</label>
                    <input type=\"text\" class=\"form-control\" name=\"nome\" required
                           placeholder=\"Digite seu nome\">
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Email</label>
                    <input type=\"email\" class=\"form-control\" name=\"email\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" required
                           placeholder=\"Digite seu email\">
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Telefone</label>
                    <input type=\"text\" class=\"form-control\" name=\"telefone\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" required
                           placeholder=\"Digite seu telefone\">
                </div>
            </div>
        </div>
        <input type=\"submit\" class=\"btn btn-success\" value=\"Criar Contato\"/>
        <a href=\"{{ path('index') }}\"><button type=\"button\" class=\"btn btn-secondary ml-4\">Voltar</button></a>
        {{ form_end(form) }}
    </div>

{% endblock %}
", "AppBundle:Contatos:new.html.twig", "/var/www/html/teste4/src/AppBundle/Resources/views/Contatos/new.html.twig");
    }
}
