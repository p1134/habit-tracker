<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* login/login.html.twig */
class __TwigTemplate_456c6b75edfef9e1361bdc9db71c6d4c extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "login/login.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Habitify - Logowanie";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "
   ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", ["verify_email_error"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 8
            yield "        <div class=\"alert alert-danger\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_error"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash_error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        yield "
    <div class=\"main__background w-full h-screen\">
        <div class=\"nav\">
            <div class=\"profile-text\">
                <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">
                    <p>Utwórz konto</p>
                </a>
            </div>

            <div class=\"profile-icon w-30 h-30\">
                <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">
                    <img src=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/profile.svg"), "html", null, true);
        yield "\">
                </a>
            </div>
        </div>

        <div class=\"flex flex-col w-auto h-full justify-start items-center mt-20\">
            <div class=\"main__content md:w-auto w-full h-auto mb-10\">
                <div class=\"main__heading--form\">
                    <h1 class=\"h-auto\">LO<span class=\"main-color\">GO</span>WANIE.</h1>
                </div>
            </div>

                <form action=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" method=\"POST\" class=\"flex flex-col gap-5\">
                    <input class=\"form__widget\" type=\"text\" name=\"_username\" value=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["lastUsername"]) || array_key_exists("lastUsername", $context) ? $context["lastUsername"] : (function () { throw new RuntimeError('Variable "lastUsername" does not exist.', 34, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"Adres email\"/>
                    <input class=\"form__widget\" type=\"password\" name=\"_password\" placeholder=\"Hasło\">
                    <input class=\"form__widget\" type=\"hidden\" name=\"_target_path\" value=\"/habits\"/>
                     <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"text-sm text-gray-500\">Nie mam konta</a>

                    <div class=\"mt-14\">
                        <div class=\" form-submit absolute overflow-hidden\">
                            ";
        // line 42
        yield "                            <button type=\"submit\" class=\"form__btn--login rounded-xl text-xl relative flex gap-3\"><span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/register.svg"), "html", null, true);
        yield "\" class=\"main__btn-dashboard w-4/5\"></span>Zaloguj</button>
                            <div class=\"btn-dot absolute bottom-2\"></div>
                        </div>
                    </div>
                </form>
        </div>

    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "login/login.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  167 => 42,  160 => 37,  154 => 34,  150 => 33,  135 => 21,  131 => 20,  122 => 14,  116 => 10,  107 => 8,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Habitify - Logowanie{% endblock %}

{% block body %}

   {% for flash_error in app.flashes('verify_email_error') %}
        <div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
    {% endfor %}

    <div class=\"main__background w-full h-screen\">
        <div class=\"nav\">
            <div class=\"profile-text\">
                <a href=\"{{ path('app_register') }}\">
                    <p>Utwórz konto</p>
                </a>
            </div>

            <div class=\"profile-icon w-30 h-30\">
                <a href=\"{{ path('app_register') }}\">
                    <img src=\"{{ asset('/img/profile.svg') }}\">
                </a>
            </div>
        </div>

        <div class=\"flex flex-col w-auto h-full justify-start items-center mt-20\">
            <div class=\"main__content md:w-auto w-full h-auto mb-10\">
                <div class=\"main__heading--form\">
                    <h1 class=\"h-auto\">LO<span class=\"main-color\">GO</span>WANIE.</h1>
                </div>
            </div>

                <form action=\"{{ path('app_login') }}\" method=\"POST\" class=\"flex flex-col gap-5\">
                    <input class=\"form__widget\" type=\"text\" name=\"_username\" value=\"{{ lastUsername }}\" placeholder=\"Adres email\"/>
                    <input class=\"form__widget\" type=\"password\" name=\"_password\" placeholder=\"Hasło\">
                    <input class=\"form__widget\" type=\"hidden\" name=\"_target_path\" value=\"/habits\"/>
                     <a href=\"{{ path('app_register') }}\" class=\"text-sm text-gray-500\">Nie mam konta</a>

                    <div class=\"mt-14\">
                        <div class=\" form-submit absolute overflow-hidden\">
                            {# <a href=\"{{ path('app_register') }}\"> #}
                            <button type=\"submit\" class=\"form__btn--login rounded-xl text-xl relative flex gap-3\"><span><img src=\"{{ asset('/img/register.svg') }}\" class=\"main__btn-dashboard w-4/5\"></span>Zaloguj</button>
                            <div class=\"btn-dot absolute bottom-2\"></div>
                        </div>
                    </div>
                </form>
        </div>

    </div>

{% endblock %}
", "login/login.html.twig", "/Users/paulina/Desktop/habit-tracker/templates/login/login.html.twig");
    }
}
