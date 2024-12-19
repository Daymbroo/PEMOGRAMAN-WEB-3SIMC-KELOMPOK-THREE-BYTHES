using expo3.Models;
using Microsoft.AspNetCore.Mvc;
using System.Collections.Generic;
using System.Threading.Tasks;

namespace expo3.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class ProdukController : ControllerBase
    {
        private readonly ProdukRepository _produkRepository;

        public ProdukController(ProdukRepository produkRepository)
        {
            _produkRepository = produkRepository;
        }

        // GET: api/produk
        [HttpGet]
        public async Task<ActionResult<IEnumerable<Produk>>> GetAllProduks()
        {
            var produkList = await _produkRepository.GetAllProduks();
            return Ok(produkList);
        }

        // GET: api/produk/nama_produk
        [HttpGet("{nama}")]
        public async Task<ActionResult<Produk>> GetProdukByName(string nama)
        {
            var produk = await _produkRepository.GetProdukByName(nama);
            if (produk == null)
            {
                return NotFound();
            }
            return Ok(produk);
        }

        // POST: api/produk
        [HttpPost]
        public async Task<ActionResult<Produk>> AddProduk([FromBody] Produk produk)
        {
            if (produk == null)
            {
                return BadRequest("Produk tidak boleh null.");
            }

            // Menambahkan produk ke database
            await _produkRepository.AddProduk(produk);
            return CreatedAtAction(nameof(GetProdukByName), new { nama = produk.Nama }, produk);
        }

        // PUT: api/produk/nama_produk
        [HttpPut("{nama}")]
        public async Task<IActionResult> UpdateProduk(string nama, [FromBody] Produk produk)
        {
            if (nama != produk.Nama)
            {
                return BadRequest("Nama produk tidak cocok.");
            }

            var result = await _produkRepository.UpdateProduk(produk);
            if (!result)
            {
                return NotFound();
            }

            return NoContent();
        }

        // DELETE: api/produk/nama_produk
        [HttpDelete("{nama}")]
        public async Task<IActionResult> DeleteProduk(string nama)
        {
            var result = await _produkRepository.DeleteProduk(nama);
            if (!result)
            {
                return NotFound();
            }

            return NoContent();
        }
    }
}