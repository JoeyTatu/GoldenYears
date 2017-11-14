using Microsoft.Owin;
using Owin;

[assembly: OwinStartupAttribute(typeof(GoldenYearsWebApp.Startup))]
namespace GoldenYearsWebApp
{
    public partial class Startup
    {
        public void Configuration(IAppBuilder app)
        {
            ConfigureAuth(app);
        }
    }
}
