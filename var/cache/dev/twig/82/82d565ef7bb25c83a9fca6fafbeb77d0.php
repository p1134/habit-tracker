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

/* /habit/_remove_habit_form.html.twig */
class __TwigTemplate_e5f645caa2bd63c4e6bbeaf4d9ad31b3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/habit/_remove_habit_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/habit/_remove_habit_form.html.twig"));

        // line 1
        yield "<div class=\"habits__panel-right--bottom h-full w-full flex items-center\">
    <form method=\"POST\" action=\"";
        // line 2
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habit_remove");
        yield "\" name=\"form[ownHabits][]\" class=\"flex flex-col m-8 flex-wrap w-full justify-be\">

        <div class=\"overflow-y-scroll limit-height border rounded-xl p-4\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ownHabits"]) || array_key_exists("ownHabits", $context) ? $context["ownHabits"] : (function () { throw new RuntimeError('Variable "ownHabits" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["oh"]) {
            // line 6
            yield "            <label for=\"habit_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["oh"], "id", [], "any", false, false, false, 6), "html", null, true);
            yield "\" class=\"habit-remove flex gap-4\">
                <input type=\"checkbox\" name=\"ownHabits[]\" value=\"";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["oh"], "id", [], "any", false, false, false, 7), "html", null, true);
            yield "\" id=\"habit_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["oh"], "id", [], "any", false, false, false, 7), "html", null, true);
            yield "\">
                ";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["oh"], "name", [], "any", false, false, false, 8), "html", null, true);
            yield "
                </label>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['oh'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        yield "        
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete_habits"), "html", null, true);
        yield "\">
        </div>


        <div class=\"btn w-full flex justify-center items-center gap-4 mt-8\">

            <div class=\"relative overflow-hidden flex w-1/2\">
                <input type=\"submit\" value=\"Usuń\" name=\"remove\" class=\"btn--categories relative w-full bg-black text-center text-md text-white rounded-xl pt-2.5 pb-2.5 cursor-pointer flex items-center\">
                <div class=\"btn-dot--categories absolute bottom-1 left-0\"></div>
            </div>

            <div class=\"relative overflow-hidden flex w-1/2\">
                <a href=\"";
        // line 24
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
        return "/habit/_remove_habit_form.html.twig";
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
        return array (  99 => 24,  84 => 12,  81 => 11,  72 => 8,  66 => 7,  61 => 6,  57 => 5,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"habits__panel-right--bottom h-full w-full flex items-center\">
    <form method=\"POST\" action=\"{{ path('app_habit_remove') }}\" name=\"form[ownHabits][]\" class=\"flex flex-col m-8 flex-wrap w-full justify-be\">

        <div class=\"overflow-y-scroll limit-height border rounded-xl p-4\">
        {% for oh in ownHabits %}
            <label for=\"habit_{{ oh.id }}\" class=\"habit-remove flex gap-4\">
                <input type=\"checkbox\" name=\"ownHabits[]\" value=\"{{ oh.id }}\" id=\"habit_{{ oh.id }}\">
                {{ oh.name }}
                </label>
        {% endfor %}
        
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('delete_habits') }}\">
        </div>


        <div class=\"btn w-full flex justify-center items-center gap-4 mt-8\">

            <div class=\"relative overflow-hidden flex w-1/2\">
                <input type=\"submit\" value=\"Usuń\" name=\"remove\" class=\"btn--categories relative w-full bg-black text-center text-md text-white rounded-xl pt-2.5 pb-2.5 cursor-pointer flex items-center\">
                <div class=\"btn-dot--categories absolute bottom-1 left-0\"></div>
            </div>

            <div class=\"relative overflow-hidden flex w-1/2\">
                <a href=\"{{ path('app_habit') }}\" class=\"btn--categories w-full relative bg-black text-center text-white text-md rounded-xl pt-2.5 pb-2.5\"><button>Anuluj</button></a>
                <div class=\"btn-dot--categories absolute bottom-1 left-0\"></div>
            </div>

        </div>
    </form>
</div>", "/habit/_remove_habit_form.html.twig", "/Users/paulina/Desktop/habit-tracker/templates/habit/_remove_habit_form.html.twig");
    }
}
