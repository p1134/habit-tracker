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

/* /habit/_new_habit_form.html.twig */
class __TwigTemplate_33dced6bde36488c680c472dbf13e47d extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/habit/_new_habit_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/habit/_new_habit_form.html.twig"));

        // line 1
        yield "<div class=\"habits__panel-right--bottom h-full w-full flex items-center\">
    <form method=\"POST\" action=\"";
        // line 2
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_new_habit");
        yield "\" name=\"form[ownHabits][]\" class=\"flex flex-col m-8 w-full h-full justify-between items-center\">
        <div class=\"flex w-full justify-center items-start mt-8 gap-4\">
            ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), 'widget', ["attr" => ["class" => "border rounded-xl w-1/2 p-3 h-12 resize-none", "placeholder" => "Nawyk"]]);
        yield "
            ";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "category", [], "any", false, false, false, 5), 'widget', ["attr" => ["class" => "w-1/2 p-3 rounded-xl border"]]);
        yield "
        
            <input type=\"hidden\" name=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "_token", [], "any", false, false, false, 7), "vars", [], "any", false, false, false, 7), "full_name", [], "any", false, false, false, 7), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "_token", [], "any", false, false, false, 7), "vars", [], "any", false, false, false, 7), "value", [], "any", false, false, false, 7), "html", null, true);
        yield "\">
        </div>

        <div class=\"btn w-full flex justify-center items-center gap-4 mb-8\">

            <div class=\"relative overflow-hidden flex w-1/2\">
                <input type=\"submit\" value=\"Zapisz\" name=\"add\" class=\"btn--categories relative w-full bg-black text-center text-md text-white rounded-xl pt-2.5 pb-2.5 cursor-pointer flex items-center\">
                <div class=\"btn-dot--categories absolute bottom-1 left-0\"></div>
            </div>

            <div class=\"relative overflow-hidden flex w-1/2\">
                <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habit");
        yield "\" class=\"btn--categories w-full relative bg-black text-center text-white text-md rounded-xl pt-2.5 pb-2.5\"><button>Anuluj</button></a>
                <div class=\"btn-dot--categories absolute bottom-1 left-0\"></div>
            </div>
        </div>
    </form>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/habit/_new_habit_form.html.twig";
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
        return array (  81 => 18,  65 => 7,  60 => 5,  56 => 4,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"habits__panel-right--bottom h-full w-full flex items-center\">
    <form method=\"POST\" action=\"{{ path('app_new_habit') }}\" name=\"form[ownHabits][]\" class=\"flex flex-col m-8 w-full h-full justify-between items-center\">
        <div class=\"flex w-full justify-center items-start mt-8 gap-4\">
            {{ form_widget(form.name, {'attr': {'class': 'border rounded-xl w-1/2 p-3 h-12 resize-none', 'placeholder': 'Nawyk'}}) }}
            {{ form_widget(form.category, {'attr': {'class': 'w-1/2 p-3 rounded-xl border'}}) }}
        
            <input type=\"hidden\" name=\"{{ form._token.vars.full_name }}\" value=\"{{ form._token.vars.value }}\">
        </div>

        <div class=\"btn w-full flex justify-center items-center gap-4 mb-8\">

            <div class=\"relative overflow-hidden flex w-1/2\">
                <input type=\"submit\" value=\"Zapisz\" name=\"add\" class=\"btn--categories relative w-full bg-black text-center text-md text-white rounded-xl pt-2.5 pb-2.5 cursor-pointer flex items-center\">
                <div class=\"btn-dot--categories absolute bottom-1 left-0\"></div>
            </div>

            <div class=\"relative overflow-hidden flex w-1/2\">
                <a href=\"{{ path('app_habit') }}\" class=\"btn--categories w-full relative bg-black text-center text-white text-md rounded-xl pt-2.5 pb-2.5\"><button>Anuluj</button></a>
                <div class=\"btn-dot--categories absolute bottom-1 left-0\"></div>
            </div>
        </div>
    </form>
</div>", "/habit/_new_habit_form.html.twig", "/Users/paulina/Desktop/habit-tracker/templates/habit/_new_habit_form.html.twig");
    }
}
