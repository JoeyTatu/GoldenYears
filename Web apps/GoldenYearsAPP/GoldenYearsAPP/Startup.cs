using Microsoft.Owin;
using Owin;

[assembly: OwinStartupAttribute(typeof(GoldenYearsAPP.Startup))]
namespace GoldenYearsAPP
{
    public partial class Startup
    {
        public void Configuration(IAppBuilder app)
        {
            ConfigureAuth(app);
        }
    }
}
