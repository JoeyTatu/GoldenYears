using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Data.Entity;

namespace GoldenYearsWebApp.Models
{
    public class GoldenYearsContext : DbContext
    {
        public GoldenYearsContext() :base("GoldenYearsContext")
        {
            // Controller inherits from DbContect constructor
            // referencing Web.config for "GoldenYearsContext" details
            // ** !! Change "DefaultConnection" to "GoldenYearsContext" !! **
            // ** !! in connectionStrings section of Web.config         !! **
        }
        public DbSet<Address> Addresses { get; set; }
        public DbSet<Booking> Bookings { get; set; }
    }
}