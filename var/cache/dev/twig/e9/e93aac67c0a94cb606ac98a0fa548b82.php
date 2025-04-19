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

/* registration/register.html.twig */
class __TwigTemplate_9ece15fbf2521afb86362bb3c89649a8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        yield "Habitify - Register";
        
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
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "flashes", ["verify_email_error"], "method", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 7
            yield "        <div class=\"alert alert-danger\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_error"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash_error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        yield "
    <div class=\"main__background w-full h-screen\">
    <div class=\"nav\">
        <div class=\"profile-text\">
            <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">
                <p>Zaloguj się</p>
            </a>
        </div>

        <div class=\"profile-icon w-30 h-30\">
            <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">
                <img src=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/profile.svg"), "html", null, true);
        yield "\">
            </a>
        </div>
    </div>

    <div class=\"flex flex-col w-auto h-full justify-start items-center mt-20\">
        <div class=\"main__content md:w-auto w-full h-auto\">
            <div class=\"main__heading--form\">
                <h1 class=\"h-auto\">REJESTRAC<span class=\"main-color\">JA.</span></h1>
            </div>
        </div>

        ";
        // line 33
        yield "        ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 33, $this->source); })()), 'errors');
        yield "

        ";
        // line 35
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), 'form_start');
        yield "
            <div class=\"flex flex-col gap-4 w-full\">
            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "firstname", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form__widget", "placeholder" => "Imię"]]);
        // line 41
        yield "
            ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), "lastname", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form__widget", "placeholder" => "Nazwisko"]]);
        // line 46
        yield "
            ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 47, $this->source); })()), "email", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form__widget", "placeholder" => "Adres e-mail"]]);
        // line 51
        yield "
            ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 52, $this->source); })()), "plainPassword", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form__widget", "placeholder" => "Hasło"]]);
        // line 57
        yield "
            <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"text-sm text-gray-500\">Mam już konto</a>
            <div class=\"flex gap-3\">
            ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 60, $this->source); })()), "agreeTerms", [], "any", false, false, false, 60), 'widget');
        yield "
            <p>Akceptuję regulamin</p>
            </div>

            <div class=\"mt-10\">
                <div class=\" form-submit absolute overflow-hidden\">
                    ";
        // line 67
        yield "                        <button type=\"submit\" class=\"form__btn rounded-xl text-xl relative flex gap-3\"><span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/register.svg"), "html", null, true);
        yield "\" class=\"main__btn-dashboard w-4/5\"></span>Zarejestruj</button>
                        <div class=\"btn-dot absolute bottom-2\"></div>
                    ";
        // line 70
        yield "                </div>
            </div>

            </div>
        ";
        // line 74
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 74, $this->source); })()), 'form_end');
        yield "
        ";
        // line 76
        yield "    </div>

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
        return "registration/register.html.twig";
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
        return array (  209 => 76,  205 => 74,  199 => 70,  193 => 67,  184 => 60,  179 => 58,  176 => 57,  174 => 52,  171 => 51,  169 => 47,  166 => 46,  164 => 42,  161 => 41,  159 => 37,  154 => 35,  148 => 33,  133 => 20,  129 => 19,  120 => 13,  114 => 9,  105 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Habitify - Register{% endblock %}

{% block body %}
    {% for flash_error in app.flashes('verify_email_error') %}
        <div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
    {% endfor %}

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

    <div class=\"flex flex-col w-auto h-full justify-start items-center mt-20\">
        <div class=\"main__content md:w-auto w-full h-auto\">
            <div class=\"main__heading--form\">
                <h1 class=\"h-auto\">REJESTRAC<span class=\"main-color\">JA.</span></h1>
            </div>
        </div>

        {# <div class=\"flex flex-col w-\"> #}
        {{ form_errors(registrationForm) }}

        {{ form_start(registrationForm) }}
            <div class=\"flex flex-col gap-4 w-full\">
            {{ form_widget(registrationForm.firstname, {
                'attr': {
                    'class': 'form__widget',
                    'placeholder': 'Imię'
                    }}) }}
            {{ form_widget(registrationForm.lastname, {
                'attr': {
                    'class': 'form__widget',
                    'placeholder': 'Nazwisko'
                    }}) }}
            {{ form_widget(registrationForm.email, {
                'attr': {
                    'class': 'form__widget',
                    'placeholder':'Adres e-mail'
                    }}) }}
            {{ form_widget(registrationForm.plainPassword, {
                'attr': {
                    'class': 'form__widget',
                    'placeholder': 'Hasło'
                }
            }) }}
            <a href=\"{{ path('app_login') }}\" class=\"text-sm text-gray-500\">Mam już konto</a>
            <div class=\"flex gap-3\">
            {{ form_widget(registrationForm.agreeTerms) }}
            <p>Akceptuję regulamin</p>
            </div>

            <div class=\"mt-10\">
                <div class=\" form-submit absolute overflow-hidden\">
                    {# <a href=\"{{ path('app_register') }}\"> #}
                        <button type=\"submit\" class=\"form__btn rounded-xl text-xl relative flex gap-3\"><span><img src=\"{{ asset('/img/register.svg') }}\" class=\"main__btn-dashboard w-4/5\"></span>Zarejestruj</button>
                        <div class=\"btn-dot absolute bottom-2\"></div>
                    {# </a> #}
                </div>
            </div>

            </div>
        {{ form_end(registrationForm) }}
        {# </div> #}
    </div>

</div>

{% endblock %}
", "registration/register.html.twig", "/Users/paulina/Desktop/habit-tracker/templates/registration/register.html.twig");
    }
}
