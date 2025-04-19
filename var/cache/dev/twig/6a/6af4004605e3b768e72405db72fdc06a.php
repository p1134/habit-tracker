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

/* main_page/index.html.twig */
class __TwigTemplate_cc79384d88a4ff94a7fe265670dc3a03 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main_page/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main_page/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main_page/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "<div class=\"main__background w-full h-screen\">
    <div class=\"nav\">
        <div class=\"profile-text\">
            <a href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">
                <p>Zaloguj się</p>
            </a>
        </div>

        <div class=\"profile-icon w-30 h-30\">
            <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">
                <img src=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/profile.svg"), "html", null, true);
        yield "\">
            </a>
        </div>
    </div>

    <div class=\"flex flex-col w-full h-full justify-center items-center\">
        <div class=\"main__content md:w-auto w-full h-auto relative\">
            <div class=\"main__heading\">
                <h1 class=\"h-auto\">HABITIF<span class=\"main-color\">Y.</span></h1>
            </div>
            <div class=\"main__heading--small absolute w-max right-0 bottom-44\">
                <h2 class=\"text-black w-full h-auto\">Przypomni, zanim ty zdążysz zapomnieć</h2>
            </div>
        </div>
        <div class=\"main__cta absolute bottom-48 overflow-hidden\">
            <a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">
                <button class=\"main__cta-btn rounded-xl text-xl relative flex gap-3\"><span><img src=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/dashboard.svg"), "html", null, true);
        yield "\" class=\"main__btn-dashboard w-4/5\"></span>Zacznij teraz</button>
                <div class=\"btn-dot absolute bottom-2\"></div>
            </a>
        </div>
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
        return "main_page/index.html.twig";
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
        return array (  116 => 30,  112 => 29,  94 => 14,  90 => 13,  81 => 7,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"main__background w-full h-screen\">
    <div class=\"nav\">
        <div class=\"profile-text\">
            <a href=\"{{ path('app_login') }}\">
                <p>Zaloguj się</p>
            </a>
        </div>

        <div class=\"profile-icon w-30 h-30\">
            <a href=\"{{ path('app_login') }}\">
                <img src=\"{{ asset('/img/profile.svg') }}\">
            </a>
        </div>
    </div>

    <div class=\"flex flex-col w-full h-full justify-center items-center\">
        <div class=\"main__content md:w-auto w-full h-auto relative\">
            <div class=\"main__heading\">
                <h1 class=\"h-auto\">HABITIF<span class=\"main-color\">Y.</span></h1>
            </div>
            <div class=\"main__heading--small absolute w-max right-0 bottom-44\">
                <h2 class=\"text-black w-full h-auto\">Przypomni, zanim ty zdążysz zapomnieć</h2>
            </div>
        </div>
        <div class=\"main__cta absolute bottom-48 overflow-hidden\">
            <a href=\"{{ path('app_register') }}\">
                <button class=\"main__cta-btn rounded-xl text-xl relative flex gap-3\"><span><img src=\"{{ asset('/img/dashboard.svg') }}\" class=\"main__btn-dashboard w-4/5\"></span>Zacznij teraz</button>
                <div class=\"btn-dot absolute bottom-2\"></div>
            </a>
        </div>
    </div>

</div>

{% endblock %}
", "main_page/index.html.twig", "/Users/paulina/Desktop/habit-tracker/templates/main_page/index.html.twig");
    }
}
