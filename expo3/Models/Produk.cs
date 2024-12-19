using System.ComponentModel.DataAnnotations;

namespace expo3.Models
{
    public class Produk
    {
        [Required(ErrorMessage = "Nama wajib diisi")]
        [MaxLength(45)]
        public string Nama { get; set; }

        [Required(ErrorMessage = "Jenis wajib diisi")]
        [MaxLength(45)]
        public string Kategori { get; set; }

        [Required(ErrorMessage = "Harga jual wajib diisi")]
        [Range(0, double.MaxValue)]
        public decimal HargaJual { get; set; }

        [Required(ErrorMessage = "Harga beli wajib diisi")]
        [Range(0, double.MaxValue)]
        public decimal HargaBeli { get; set; }

        [MaxLength(255)]
        public string Deskripsi { get; set; }

        public string Foto { get; set; }
    }
}
